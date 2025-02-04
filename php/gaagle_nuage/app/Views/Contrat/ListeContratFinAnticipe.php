<!DOCTYPE html>
<html lang="fr">

<body>

<!-- List of contracts with an early termination -->
    <div class="container mt-5">
        <h3 class="text-center">Liste des contrats avec une fin anticipé</h3>
        <div class="mt-5">
            <?php if($contratFinA != null) {?>
            <table class="table table-striped table-hover">
                <thead class="table-info">
                    <tr>
                        <th>Nom</th>
                        <th>Type de contrat</th>
                        <th>Année de début</th>
                        <th>Année de fin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($contratFinA as $row) { ?>
                        <tr>
                            <td> <?php echo $row->nom; ?> </td>
                            <td> <?php echo $row->typecontrat; ?> </td>
                            <td> <?php echo $row->annee_debut; ?> </td>
                            <td> <?php echo $row->anneefin; ?> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php }else{ echo "il n'y a pas de contrat ayant une fin anticipé";}?>
        </div>
    </div>


<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<footer>
</footer>

</body>
</html>