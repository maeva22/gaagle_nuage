<?php

namespace App\Models;

class Contrat {

    //int $num_contrat, Entreprise $siren, Laboratoire $labo, date $date_debut, date $date_fin, date $date_fin_anticipee, string $referent_entreprise
    
    /**
     * Select All from VueEntpNbByContrat
     * @return mixed Query
     */
    public function getContrat(){
        // connection to db
        $db = db_connect(); 
        $query = $db->query('SELECT * FROM VueEntpNbByContrat');
        // logout to db 
        $db -> close(); 
        return $query->getResult();  
    }

    /**
     * Select All from Vuelabocontrat
     * @return mixed Query
     */
    public function getContratLabo(){
        // connection to db
        $db = db_connect(); 
        $query = $db->query('SELECT * FROM Vuelabocontrat');
        // logout to db
        $db -> close(); 
        return $query->getResult();  
    }

    /**
     * Select All from VueConflict
     * @return mixed Query
     */
    public function getContratFinAnticipe(){
        // connection to db
        $db = db_connect(); 
        $query = $db->query('SELECT * FROM VueConflict');
        // logout to db
        $db -> close(); 
        return $query->getResult();  
    }
}

?>