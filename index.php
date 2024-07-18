<?php
include_once "get-currency.php";
include "form-confirmation.php";
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
    <h1>Convertisseur de devises</h1>
    <form name="currencyConverter" method="POST" action="">
        <label for="baseCurrencySelect">Quelle est la devise que vous voulez convertir?</label>
        <select name="baseCurrencies" id="baseCurrencySelect">
            <?php
            addIsoToSelectOptions($currencies_rates, $isoCountryMapping);
            ?>
        </select>
        <label for="finalCurrencySelect">Dans quelle devise voulez-vous convertir?</label>
        <select name="finalCurrencies" id="finalCurrencySelect">
            <?php
            addIsoToSelectOptions($currencies_rates, $isoCountryMapping);
            ?>
        </select>
        <label for="toConvert" required>Montant?</label>
        <input type="number" id="toConvert" name="toConvert" step="0.01" placeholder="123.88">
        <input type="button" value="Inverser les devises" id="swapCurrencies">
        <input type="submit" value="Submit">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            formConfirmation($currencies_rates);
        }
        ?>
        <input type="reset" value="Remettre à 0">
    </form>
    <script src="swap-button.js"></script>
</body>
</html>