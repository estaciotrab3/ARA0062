<?php

class Bd 
{
    
    protected $dsn, $user, $password, $conn;
    
    function __construct() {        
        $this->dsn = 'mysql:dbname=epiz_27299042_portal_noticias;host=sql105.epizy.com ';
        $this->user = 'epiz_27299042';
        $this->password = 'F6a24uFr1r9kK75';
        

        /* conta local
        $this->dsn = 'mysql:dbname=portal_blog;host=localhost';
        $this->user = 'root';
        $this->password = '';
        */

        try {
            $this->conn = new PDO($this->dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
    
    /**
     * Rodar uma consulta select
     **/
    function query($sql) {
       try {
           return $this->conn->query($sql);
        } catch (PDOException $e) {
            echo 'Query failed: ' . $e->getMessage();
        }
        
        
    }
    
    /**
     * Executar sql = insert, update, delete
     * */
    function exec($sql){
         try {
           return $this->conn->exec($sql);
        } catch (PDOException $e) {
            echo 'Exec failed: ' . $e->getMessage();
        }
        
    }
}


