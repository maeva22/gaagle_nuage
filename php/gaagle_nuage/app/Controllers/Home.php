<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $entreprise = new \App\Models\Entreprise();
        $data['entreprises'] = $entreprise->getEntreprises();
        return view('header').view('index',$data);
    }

    public function pageListeEntreprise()
    {   
        $entreprise = new \App\Models\Entreprise();
        $data['entreprises'] = $entreprise->getEntreprises();
        return view('header').view('Entreprise/ListeEntreprise',$data);
    }

    public function pageListeEntrepriseBloque()
    {
        $entreprise = new \App\Models\Entreprise();
        $data['entpBlocked'] = $entreprise->getEntreprisesBlocked();
        return view('header').view('Entreprise/ListeEntrepriseBloque',$data);
    }

    public function pageListeContrat()
    {
        $contratEntp = new \App\Models\Contrat();
        $data['contratEntp'] = $contratEntp->getContrat();
        return view('header').view('Contrat/ListeContrat',$data);
    }

    public function pageListeContratLabo()
    {
        $contratLabo = new \App\Models\Contrat();
        $data['laboratoires'] = $contratLabo->getContratLabo();
        return view('header').view('Contrat/ListeContratLabo',$data);
    }

    public function pageListeContratFinAnticipe()
    {
        $contratFA = new \App\Models\Contrat();
        $data['contratFinA'] = $contratFA->getContratFinAnticipe();
        return view('header').view('Contrat/ListeContratFinAnticipe',$data);
    }

    public function pageListeEtudiant()
    {
        $etudiant = new \App\Models\Etudiant();
        $data['etudiants'] = $etudiant->getEtudiant();
        return view('header').view('Etudiant/ListeEtudiant', $data);
    }

    public function pageListeStagiaire()
    {
        $etudiantS = new \App\Models\Etudiant();
        $data['stagiaires'] = $etudiantS->getStagiaire();
        return view('header').view('Etudiant/ListeStagiaire', $data);
    }

    public function pageListeAlternance()
    {
        $etudiantA = new \App\Models\Etudiant();
        $data['alternants'] = $etudiantA->getAlternant();
        return view('header').view('Etudiant/ListeAlternance', $data);
    }

    public function pageListeEtudiantFinAnticipe()
    {
        $etudiantC1 = new \App\Models\Etudiant();
        $data['etuConflit1'] = $etudiantC1->getConflit1();
        return view('header').view('Etudiant/ListeEtudiantFinAnticipe', $data);
    }

    public function pageListeEtudiant2FinAnticipe()
    {
        $etudiantC2 = new \App\Models\Etudiant();
        $data['etuConflit2'] = $etudiantC2->getConflit2();
        return view('header').view('Etudiant/ListeEtudiant2FinAnticipe', $data);
    }

    public function pageListeEmploye()
    {
        $employe = new \App\Models\Employe();
        $data['employes'] = $employe->getEmploye();
        return view('header').view('Employe/ListeEmploye',$data);
    }
    
    public function pageListeVacataire()
    {
        $employe = new \App\Models\Employe();
        $data['employes'] = $employe->getVacataire();
        return view('header').view('Employe/ListeVacataire',$data);
    }

    public function pageListeMaitreApprentissage()
    {
        $employe = new \App\Models\Employe();
        $data['employes'] = $employe->getMaitreApprentissage();
        return view('header').view('Employe/ListeMaitreApprentissage',$data);
    }

    public function pageListeMaVaCurrent()
    {
        $employe = new \App\Models\Employe();
        $data['employes'] = $employe->getVacataireEmployeCurrent();
        return view('header').view('Employe/ListeMaVaCurrent',$data);
    }
        
    public function pageListeNoteMaitreApprentissage()
    {
        $employe = new \App\Models\Employe();
        $data['employes'] = $employe->getMaitreApprentissageNote();
        return view('header').view('Employe/ListeNoteMaitreApprentissage',$data);
    }
        
}
