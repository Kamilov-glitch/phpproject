<?php

class Database{        

    const SELECTSINGLE = 1;
    const SELECTALL = 2;
    const EXECUTE = 3;
        
    private $pdo;

    public function __construct(){
        
        $this->pdo = new PDO("mysql:host=localhost;dbname=project", "project_admin", "abcd");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
    }

    public function queryDB($sql, $mode, $values = []) {
        $stmt = $this->pdo->prepare($sql);
        foreach ($values as $valueToBind) {
            $stmt->bindValue($valueToBind[0], $valueToBind[1]);
        }
        $stmt->execute();

        if ($mode !== self::SELECTSINGLE || $mode!== self::SELECTALL 
            || $mode !== self::EXECUTE) {
                throw new Exception("Invalid mode");
        } elseif ($mode === self::SELECTSINGLE) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } elseif ($mode === self::SELECTALL) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    
}
    