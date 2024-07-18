<?php
include_once "get-currency.php";
include_once "form-confirmation.php";
$currencies_rates = getRates();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le rêve, convertisseur de devises</title>
    <meta name="description" content="Convertisseur de devises pour calculer combien vous coûte votre cocktail!">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form name="currencyConverter" method="POST">
        <label for="baseCurrencySelect">Quelle est la devise que vous voulez convertir?</label>
        <select name="baseCurrencies" id="baseCurrencySelect">
            <!-- CREER EN PHP EN PRENANT LES CODES ISO RECU METTRE USD DEVANT TOUT-->
            <?php
            addIsoToSelectOptions($currencies_rates, $isoCountryMapping);
            ?>
        </select>
        <label for="finalCurrencySelect">Dans quelle devise voulez-vous convertir?</label>
        <select name="finalCurrencies" id="finalCurrencySelect">
            <!-- CREER EN PHP EN PRENANT LES CODES ISO RECU METTRE EUR DEVANT TOUT-->
            <?php
            addIsoToSelectOptions($currencies_rates, $isoCountryMapping);
            ?>
        </select>
        <label for="toConvert" required>Montant?</label>
        <input type="number" id="toConvert" name="toConvert" step="0.01">
        <input type="button" value="Inverser les devises" id="swapCurrencies">
        <input type="submit" value="Submit">
        <input type="reset" value="Remettre à 0">
    </form>
</body>

</html>
