<!DOCTYPE html>
<html lang="fr">

<body>
<!-- List of student trainees -->
    <div class="container mt-5">
        <h3 class="text-center">Liste des stagiaires</h3>
        <div class="mt-5">
        <?php if($stagiaires != null) {?>
            <table class="table table-striped table-hover">
                <thead class="table-info">
                    <tr>
                        <th>Numéro étudiant</th>
                        <th>Nationalité</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($stagiaires as $row) { ?>
                        <tr>
                            <td> <?php echo $row->etudiant; ?> </td>
                            <td> <?php echo $row->nationalite; ?> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php }else{ echo "il n'y a pas de stagiaire";}?>
        </div>
    </div>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<footer>
</footer>

</body>
</html>