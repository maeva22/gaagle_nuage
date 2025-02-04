<!DOCTYPE html>
<html lang="fr">

<body>
<!-- List of students with 2 early finishes -->
    <div class="container mt-5">
        <h3 class="text-center">Liste des étudiants ayant 2 fins anticipés</h3>
        <div class="mt-5">
        <?php if($etuConflit2 != null) {?>
            <table class="table table-striped table-hover">
                <thead class="table-info">
                    <tr>
                        <th>Numéro étudiant</th>
                        <th>Entreprise N°1</th>
                        <th>Fin de contrat N°1</th>
                        <th>Entreprise N°2</th>
                        <th>Fin de contrat N°2</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($etuConflit2 as $row) { ?>
                        <tr>
                            <td> <?php echo $row->etudiant; ?> </td>
                            <td> <?php echo $row->entreprise1; ?> </td>
                            <td> <?php echo $row->findecontratpremature1; ?> </td>
                            <td> <?php echo $row->entreprise2; ?> </td>
                            <td> <?php echo $row->findecontratpremature2; ?> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php }else{ echo "il n'y a pas d'étudiant ayant 2 fins anticipés";}?>
        </div>
    </div>


<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<footer>
</footer>

</body>
</html>