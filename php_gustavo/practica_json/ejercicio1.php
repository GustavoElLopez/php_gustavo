<?php
class Client{
    var $name;
    var $age;
    var $city;
    public function __construct(){}
}

$client = new Client();
$client->name = "Gustavo";
$client-> age = 19;
$client->city = "Capiata";

$client2 = new Client();
$client2->name = "David";
$client2-> age = 20;
$client2->city = "Nemby";



$code_json = json_encode($client);
$client2_json = json_encode($client2);

print $code_json ."<br>". $client2_json;

?>