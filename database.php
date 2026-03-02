<?php

class Database {

    private $db;

    //contrutor 

    public function __construct($config)
    {
        $this->db = new PDO($this->getDsn($config));
    }

    //Valida as configuraçoes
    public function getDsn($config){
       
        $driver = $config['driver'];
        unset($config['driver']);

        $dsn = $driver . ':' . http_build_query($config, '', ';');
        
        if ($driver == 'sqlite') {
            $dsn = $driver . ':' . $config['database'];
        }

        return $dsn;
    }

    public function query($query, $class = null, $params = []){
        
        //Recebe as futuras query q montarmos 
        $prepare = $this->db->prepare($query);

        //Caso exista class  queremos vai retornar como array 
       if($class){
            $prepare->setFetchMode(PDO::FETCH_CLASS, $class);
        }

        $prepare->execute($params);
        return $prepare;
    }
} 

$database = new Database($config['database']);