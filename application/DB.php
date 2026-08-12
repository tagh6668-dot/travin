<?php

class DB
{
    private $pdo;
    private $sQuery;
    private $bConnected = false;
    private $parameters;

    public function __construct()
    {
        $this->parameters = array();
    }

    private function Connect()
    {
        $dsn = 'mysql:dbname='.SQL_DB.';host='.SQL_SERVER.';charset=utf8';

        try {

            $this->pdo = new PDO(
                $dsn,
                SQL_USER,
                SQL_PASS,
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET sql_mode=''"
                )
            );

            $this->bConnected = true;

        } catch(PDOException $e){
    die($e->getMessage());
}
    }

    private function Init($query,$parameters = array())
    {
        if(!$this->bConnected){
            $this->Connect();
        }

        try {

            $this->sQuery = $this->pdo->prepare($query);

            if(!empty($parameters) && is_array($parameters)){
                foreach($parameters as $key => $value){
                    $this->sQuery->bindValue(':'.$key, $value);
                }
            }

            $this->sQuery->execute();

        } catch(PDOException $e){
    die('SQL Error: ' . $e->getMessage());
}

    }

    public function query($query,$params = array(),$fetchmode = PDO::FETCH_ASSOC)
    {
        $query = trim($query);

        $this->Init($query,$params);

        if (stripos($query, 'SELECT') === 0){
            return $this->sQuery->fetchAll($fetchmode);
        }

        return true;
    }

    public function queryFetch($query,$params = array(),$fetchmode = PDO::FETCH_ASSOC)
    {
        $query = trim($query);

        $this->Init($query,$params);

        if (stripos($query, 'SELECT') === 0){
            return $this->sQuery->fetch($fetchmode);
        }

        return null;
    }

    public function queryFetchColumn($query,$params = array())
    {
        $this->Init($query,$params);
        return $this->sQuery->fetchColumn();
    }

    public function queryNum($table)
    {
        $allowed = ['users','vdata','fdata','alliance','wdata'];

        if(!in_array($table,$allowed)){
            die('Invalid table');
        }

        $query = $this->queryFetch("SELECT COUNT(*) as num FROM `$table`");

        return $query['num'];
    }

    public function queryNumRow($query,$params = array())
    {
        $this->Init($query,$params);
        return $this->sQuery->rowCount();
    }

    public function column($query,$params = array())
    {
        $this->Init($query,$params);
        $Columns = $this->sQuery->fetchAll(PDO::FETCH_NUM);

        $column = null;

        foreach($Columns as $cells){
            $column[] = $cells[0];
        }

        return $column;
    }

    public function row($query,$params = array(),$fetchmode = PDO::FETCH_ASSOC)
    {
        $this->Init($query,$params);
        return $this->sQuery->fetch($fetchmode);
    }

    public function single($query,$params = array())
    {
        $this->Init($query,$params);
        return $this->sQuery->fetchColumn();
    }

    public function starttransaction()
    {
        if(!$this->bConnected){
            $this->Connect();
        }

        return $this->pdo->beginTransaction();
    }

    public function commitq()
    {
        return $this->pdo->commit();
    }

    public function get_last_id()
    {
        return $this->pdo->lastInsertId();
    }
}

$db = new DB;
?>
