<!DOCTYPE html>
<html lang="fr">

<body>

<!-- List of contracts with a laboratory -->
    <div class="container mt-5">
        <h3 class="text-center">Liste des contrats avec un laboratoire</h3>
        <div class="mt-5">
            <?php if($laboratoires != null) {?>
            <table class="table table-striped table-hover">
                <thead class="table-info">
                    <tr>
                        <th>Entreprise</th>
                        <th>Labo</th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th>Date de fin anticipé</th>
                        <th>Référent entreprise</th>
                </thead>
                <tbody>
                    <?php foreach ($laboratoires as $row) { ?>
                        <tr>
                            <td> <?php echo $row->entreprise; ?> </td>
                            <td> <?php echo $row->labo; ?> </td>
                            <td> <?php echo $row->datedebut; ?> </td>
                            <td> <?php echo $row->datefin; ?> </td>
                            <td> <?php echo $row->datefinanticipee; ?> </td>
                            <td> <?php echo $row->referententreprise; ?> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php }else{ echo "il n'y a pas de contrat avec un laboratoire";}?>
        </div>
    </div>


<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<footer>
</footer>

</body>
</html>