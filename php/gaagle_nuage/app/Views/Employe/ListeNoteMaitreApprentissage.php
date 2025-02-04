<!DOCTYPE html>
<html lang="fr">

<body>
<!-- List of apprenticeship master notes -->
    <div class="container mt-5">
        <h3 class="text-center">Liste des note des maîtres d'apprentissage</h3>
        <div class="mt-5">
        <?php if($employes != null) {?>
            <table class="table table-striped table-hover">
                <thead class="table-info">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Année</th>
                        <th>Moyenne Note</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($employes as $row) { ?>
                        <tr>
                            <td> <?php echo $row->nom; ?> </td>
                            <td> <?php echo $row->prenom; ?> </td>
                            <td> <?php echo $row->annee; ?> </td>
                            <td> <?php echo $row->avg; ?> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php }else{ echo "il n'y a pas de note pour un maître d'apprentissage";}?>
        </div>
    </div>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<footer>
</footer>

</body>
</html>