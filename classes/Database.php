<?php

class Database
{
    private $conn;

    public function __construct($servername, $username, $password, $dbname)
    {
        $this->conn = new mysqli($servername, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Falha na conexão: " . $this->conn->connect_error);
        }
    }

    public function executeQuery($sql)
    {
        $result = $this->conn->query($sql);

        if ($result === false) {
            die("Erro na consulta: " . $this->conn->error);
        }

        return $result;
    }

    public function close()
    {
        $this->conn->close();
    }
}
