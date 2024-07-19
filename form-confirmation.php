<?php
function formConfirmation($rates)
{
    if (isset($_POST["baseCurrencies"]) && isset($_POST["finalCurrencies"]) && isset($_POST["toConvert"])) {
        $errors = [];

        // Vérifier les champs du formulaire
        if (empty($_POST["baseCurrencies"])) {
            $errors[] = "Veuillez sélectionner la devise de base.";
        }
        if (empty($_POST["finalCurrencies"])) {
            $errors[] = "Veuillez sélectionner la devise finale.";
        }
        if (empty($_POST["toConvert"])) {
            $errors[] = "Veuillez entrer un montant à convertir.";
        }

        // Afficher les messages d'erreur si nécessaire
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo "<p class=\"reponse important\">$error</p>";
            }
        } else {
            $amount = $_POST["toConvert"];
            $baseCurrency = $_POST["baseCurrencies"];
            $finalCurrency = $_POST["finalCurrencies"];
            //Les rates sont données par rapport à l'euro donc il faut le rate de la première devise pour la transformer en euro puis transformer ce rate euro en rate de la nouvelle devise
            $rate = $rates[$finalCurrency] / $rates[$baseCurrency];
            $total = round($rate * $amount, 2);
            echo "<p class=\"reponse\">Vos <span class=\"important\">$amount $baseCurrency</span> valent <span class=\"important\">$total $finalCurrency</span>!</p>";
            unset($_POST);
        }
    }
}
?>