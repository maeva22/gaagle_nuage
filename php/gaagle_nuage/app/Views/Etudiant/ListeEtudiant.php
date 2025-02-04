<!DOCTYPE html>
<html lang="fr">

<body>
<!-- List of students  -->
    <div class="container mt-5">
        <h3 class="text-center">Liste des étudiants</h3>
        <div class="mt-5">
        <?php if($etudiants != null) {?>
            <table class="table table-striped table-hover">
                <thead class="table-info">
                    <tr>
                        <th>Numéro étudiant</th>
                        <th>Nationalité</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($etudiants as $row) { ?>
                        <tr>
                            <td> <?php echo $row->numeroetudiant; ?> </td>
                            <td> <?php echo $row->nationalite; ?> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php }else{ echo "il n'y a pas d'étudiant";}?>
        </div>
    </div>


<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<footer>
</footer>

</body>
</html>