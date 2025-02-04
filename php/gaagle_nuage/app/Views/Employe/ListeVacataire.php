<!DOCTYPE html>
<html lang="fr">

<body>
<!--  List of contractor-->
    <div class="container mt-5">
        <h3 class="text-center">Liste des vacataires</h3>
        <div class="mt-5">
        <?php if($employes != null) {?>
            <table class="table table-striped table-hover">
                <thead class="table-info">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($employes as $row) { ?>
                        <tr>
                            <td> <?php echo $row->nom; ?> </td>
                            <td> <?php echo $row->prenom; ?> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php }else{ echo "il n'y a pas de vacataire";}?>
        </div>
    </div>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<footer>
</footer>

</body>
</html>