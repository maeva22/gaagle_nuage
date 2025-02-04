<!DOCTYPE html>
<html lang="fr">

<body>

<!-- List of contracts -->
    <div class="container mt-5">
        <h3 class="text-center">Liste des contrats</h3>
        <div class="mt-5">
        <?php if($contratEntp != null) {?>
            <table class="table table-striped table-hover">
                <thead class="table-info">
                    <tr>
                        <th>Nom</th>
                        <th>Nbr contrat vacataire</th>
                        <th>Nbr contrat labo</th>
                        <th>Nbr contrat alternant</th>
                        <th>Nbr contrat stagiaire</th>
                        <th>Total</th>
                </thead>
                <tbody>
                    <?php foreach ($contratEntp as $row) { ?>
                        <tr>
                            <td> <?php echo $row->nom; ?> </td>
                            <td> <?php echo $row->nb_vacataire; ?> </td>
                            <td> <?php echo $row->nb_labo; ?> </td>
                            <td> <?php echo $row->nba; ?> </td>
                            <td> <?php echo $row->nbs; ?> </td>
                            <td> <?php echo $row->nb_contrats; ?> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php }else{ echo "il n'y a pas de contrat";}?>
        </div>
    </div>


<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<footer>
</footer>

</body>
</html>