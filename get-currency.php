<?php
include_once "iso-mapping-countries.php";
//fonction pour obtenir les rates avec l'API
function getRates()
{
    $url = 'https://v6.exchangerate-api.com/v6/565b6adff10a68bcc976c3e3/latest/EUR';
    $response = file_get_contents($url);
    $output = json_decode($response, true);
    return $output['conversion_rates'];
}

//fonction pour mettre les iso et les noms des monnaies si ils existent dans les iso de l'API
function addIsoToSelectOptions($array, $iso_mapping)
{
    foreach ($array as $key => $value) {
        if (array_key_exists($key, $iso_mapping)) {
            echo "<option value=\"$key\">$iso_mapping[$key]</option>";
        }
    }
}
