<?php

include './utils/userValidation.php';

class User
{
    private $dbh;

    protected $table = 'users';

    public function __construct($database, $databaseHost, $databaseUser, $databasePassword)
    {
        try {

            $this->dbh =
                new PDO(
                    sprintf('mysql:host=%s;dbname=%s', $databaseHost, $database),
                    $databaseUser,
                    $databasePassword
                );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function create($username, $password)
    {
        if (!validationPassword($password)){
            echo 'Senha inválida';
            return;
        };

        $password = password_hash($password, PASSWORD_BCRYPT);
        
        $statement = $this->dbh->prepare(
            'INSERT INTO ' . $this->table . '(username, password) VALUES (:username, :password)'
        );
        

        if (false === $statement) {
            throw new Exception('Invalid prepare statement');
        }
        
        
        if (false === $statement->execute([
            ':username' => $username,
            ':password' => $password,
        ])) {
            throw new Exception(implode(' ', $statement->errorInfo()));
        }
    }

    public function exists($username, $password)
    {
        $statement = $this->dbh->prepare(
            'SELECT * from ' . $this->table . ' where username = :username'
        );

        if (false === $statement) {
            throw new Exception('Invalid prepare statement');
        }

        $result = $statement->execute([':username' => $username]);

        if (false === $result) {
            throw new Exception(implode(' ', $statement->errorInfo()));
        }

        $row = $statement->fetch(PDO::FETCH_ASSOC);

        if (!is_array($row)) {
            return false;
        }

        return password_verify($password, $row['password']);

        
    }
}



