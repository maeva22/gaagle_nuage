<!DOCTYPE html>
<html lang="fr">

<body>
<!-- List of companies blocked --> 
    <div class="container mt-5">
        <h3 class="text-center">Liste entreprise bloqué</h3>
        <div class="mt-5">
            <?php if($entpBlocked != null) {?>
            <table class="table table-striped table-hover">
                <thead class="table-info">
                    <tr>
                        <th>Nom</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($entpBlocked as $row) { ?>
                        <tr>
                            <td> <?php echo $row->nom; ?> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php }else{ echo "il n'y a pas d'entreprise bloqué";}?>
        </div>
    </div>


<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<footer>
</footer>

</body>
</html>