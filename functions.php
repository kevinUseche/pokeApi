<?php 

function getPokemon(Int $pokemon)
{
    $api = curl_init(ENDPOINT . $pokemon);
    curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($api);
    curl_close($api);
    $json = json_decode($response);
    return $json;
}