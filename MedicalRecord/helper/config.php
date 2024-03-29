<?php
class MySQLConnection
{
    private ?PDO $connection = null;

    public function __construct(
        string $host,
        string $database,
        string $user,
        string $password = ''
    ) {
        try {
            #db source
            $dsn = "mysql:host=$host;dbname=$database";
            #connection/handler
            $this->connection = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getConnection(): ?PDO
    {
        return $this->connection;
    }
}
