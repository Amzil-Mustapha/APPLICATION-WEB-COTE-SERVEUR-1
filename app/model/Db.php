<?php

class Db 
{
    private $dsn = "mysql:host=localhost;dbname=php_tp8";
    private $user = "root";
    private $password = "";
    private $connection = null;

    protected function connect()
    {
        try {
            $this->connection = new PDO($this->dsn, $this->user, $this->password);
            return true;

        } catch (PDOException $e) {
            return false;
        }

    }

    protected function selectQuery($q)
    {
        $rs = $this->connection->query($q);
        return $rs;
    }

    protected function updateQuery($q)
    {
        $rs = $this->connection->exec($q);
        return $rs;
    }

    protected function selectQueryPro($q)
    {
        $rs = $this->connection->query("CALL {$q}");
        return $rs;
    }

    protected function updateQueryPro($q)
    {
        $rs = $this->connection->exec("CALL {$q}");
        return $rs;
    }
}
