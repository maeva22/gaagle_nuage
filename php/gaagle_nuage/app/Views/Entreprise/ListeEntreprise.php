<!DOCTYPE html>
<html lang="fr">

<body>
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


<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<footer>
</footer>

</body>
</html>