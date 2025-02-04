<?php

namespace App\Models;

class Employe {
    //int $id_employe, string $nom, string $prenom, bool $bloqueMA, bool $bloqueV, Site $siret, Entreprise $siren

    /**
     * Select All from VueMds
     * @return mixed Query
     */
    public function getMaitreApprentissage(){
        // connection to db
        $db = db_connect(); 
        $query = $db->query('SELECT * FROM VueMds');
        // logout to db
        $db -> close(); 
        return $query->getResult();  
    }

    /**
     * Select All from VueVacataire
     * @return mixed Query
     */
    public function getVacataire(){
        // connection to db
        $db = db_connect(); 
        $query = $db->query('SELECT * FROM VueVacataire');
        // logout to db
        $db -> close(); 
        return $query->getResult();  
    }

    /**
     * Select All from VueVacMds
     * @return mixed Query
     */
    public function getEmploye(){
        // connection to db
        $db = db_connect(); 
        $query = $db->query('SELECT * FROM VueVacMds');
        // logout to db
        $db -> close();  
        return $query->getResult();  
    }

    /**
     * Select All from VueVacMdsCurrent
     * @return mixed Query
     */
    public function getVacataireEmployeCurrent(){
        // connection to db
        $db = db_connect(); 
        $query = $db->query('SELECT * FROM VueVacMdsCurrent');
        // logout to db
        $db -> close();  
        return $query->getResult();  
    }

    /**
     * Select All from VueMdsNote
     * @return mixed Query
     */
    public function getMaitreApprentissageNote(){
        // connection to db
        $db = db_connect(); 
        $query = $db->query('SELECT * FROM VueMdsNote');
        // logout to db
        $db -> close();  
        return $query->getResult();  
    }
}

?>