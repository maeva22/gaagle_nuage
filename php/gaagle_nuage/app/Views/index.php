<!DOCTYPE html>
<html lang="fr">

<body>

    <div class="container mt-5">
        <h3 class="text-center" >Bienvenue sur votre application </h3>
        <div class="mt-5">
            <p class="text-center">Sélectionnez votre vue</p>
        </div>
    </div>

    <!-- List of companies -->
    <div class="container mt-5">
        <h3 class="text-center" >Liste des entreprises</h3>
        <div class="mt-5">
            <?php if($entreprises != null) {?>
            <table class="table table-striped table-hover">
                <thead class="table-info">
                    <tr>
                        <th>Nom</th>
                        <th>Adresse</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($entreprises as $row) { ?>
                        <tr>
                            <td> <?php echo $row->nom; ?> </td>
                            <td> <?php echo $row->adresse; ?> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php }else{ echo "il n'y a pas d'entreprise";}?>
        </div>
    </div>
    
    <?php /*
    try {
        $db = db_connect();      
        echo "Connexion à PDO PGSQL ok<br />";
    }
    catch (Exception $e){
        echo "<pre>";
        var_dump($e);
        echo "</pre>";
        echo "Erreur de connexion à PGSQL PDO<br />";
    }  */
    ?>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<footer>
</footer>

</body>
</html>
