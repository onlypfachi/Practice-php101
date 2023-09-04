<?php

class Database
{
    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;user=root;port=3306;dbname=myBlog;charset=utf8mb4";

        $this->connection = new PDO($dsn);

    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}
