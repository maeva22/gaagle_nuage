<?php

namespace App\Models;

class Entreprise {

    // $siren, $nom, $pays, $ville, $siege, $nbEmploye, $massesalariale, $bloque, $active

    /**
    * Select All from VueEntpCourrier
    * @return mixed Query
    */
    public function getEntreprises(){
        // connection to db
        $db = db_connect(); 
        $query = $db->query('SELECT * FROM VueEntpCourrier');
        // logout to db
        $db -> close(); 
        return $query->getResult();  
    }

    /**
    * Select All from VueEntpBlocked
    * @return mixed Query
    */
    public function getEntreprisesBlocked(){
        // connection to db
        $db = db_connect(); 
        $query = $db->query('SELECT * FROM VueEntpBlocked');
        // logout to db
        $db -> close(); 
        return $query->getResult();  
    }

}

?>