<?php

namespace App\Models;


class Etudiant{
    //int $num_etudiant, string $nationalité, string $contrat_actuel
   
    /**
    * Select All from VueEtudiant
    * @return mixed Query
    */
    public function getEtudiant(){
        // connection to db
        $db = db_connect(); 
        $query = $db->query('SELECT * FROM VueEtudiant');
        // logout to db 
        $db -> close(); 
        return $query->getResult();  
    }

    /**
    * Select All from VueAlternant
    * @return mixed Query
    */
    public function getAlternant(){
        // connection to db
        $db = db_connect(); 
        $query = $db->query('SELECT * FROM VueAlternant');
        // logout to db 
        $db -> close(); 
        return $query->getResult();  
    }

    /**
    * Select All from VueStagiare
    * @return mixed Query
    */
    public function getStagiaire(){
        // connection to db
        $db = db_connect(); 
        $query = $db->query('SELECT * FROM VueStagiare');
        // logout to db 
        $db -> close(); 
        return $query->getResult();  
    }

    /**
    * Select All from VueConflitEtudiant
    * @return mixed Query
    */
    public function getConflit1(){
        // connection to db
        $db = db_connect(); 
        $query = $db->query('SELECT * FROM VueConflitEtudiant');
        // logout to db 
        $db -> close(); 
        return $query->getResult();  
    }

    /**
    * Select All from VueConflitEtudiant2
    * @return mixed Query
    */
    public function getConflit2(){
        // connection to db
        $db = db_connect(); 
        $query = $db->query('SELECT * FROM VueConflitEtudiant2');
        // logout to db 
        $db -> close(); 
        return $query->getResult();  
    }

}

?>