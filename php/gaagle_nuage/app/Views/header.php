<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gaagle</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon"  href="icon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</head>

<nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
        <div class="container-fluid">   
            <a class="navbar-brand" href="<?php echo base_url() ?>">Gaagle</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Entreprise
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url() ?>pageListeEntreprise">Liste des entreprises</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url() ?>pageListeEntrepriseBloque">Liste des entreprises bloquées</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Contrat
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url() ?>pageListeContrat">Liste des contrats</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url() ?>pageListeContratLabo">Liste des contrats avec un laboratoire</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url() ?>pageListeContratFinAnticipe">Liste des contrats avec une fin anticipé</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Etudiant
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url() ?>pageListeEtudiant">Liste des étudiants</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url() ?>pageListeStagiaire">Liste des stagiaire</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url() ?>pageListeAlternance">Liste des alternants</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url() ?>pageListeEtudiantFinAnticipe">Liste des étudiants avec 1 fin anticipé</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url() ?>pageListeEtudiant2FinAnticipe">Liste des étudiants avec 2 fin anticipé</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Employé
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url() ?>pageListeEmploye">Employé maître d'apprentissage et vacataire</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url() ?>pageListeMaVaCurrent">Employé maître d'apprentissage et vacataire actuellement</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url() ?>pageListeVacataire">Liste des vacataires</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url() ?>pageListeMaitreApprentissage">Liste des maîtres d'apprentissage</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url() ?>pageListeNoteMaitreApprentissage">Liste des notes MA</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</html>