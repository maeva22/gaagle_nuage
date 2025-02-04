<!DOCTYPE html>
<html lang="fr">

<body>
<!-- List of students with 1 early finish -->
    <div class="container mt-5">
        <h3 class="text-center">Liste des étudiants ayant 1 fin anticipé</h3>
        <div class="mt-5">
        <?php if($etuConflit1 != null) {?>
            <table class="table table-striped table-hover">
                <thead class="table-info">
                    <tr>
                        <th>Numéro étudiant</th>
                        <th>Siren</th>
                        <th>Date de fin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($etuConflit1 as $row) { ?>
                        <tr>
                            <td> <?php echo $row->etudiant; ?> </td>
                            <td> <?php echo $row->siren; ?> </td>
                            <td> <?php echo $row->datefin; ?> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php }else{ echo "il n'y a pas d'étudiant ayant 1 fin anticipés";}?>
        </div>
    </div>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<footer>
</footer>

</body>
</html>