<?php

$computer[0]['CPU'] = "i9-10900K";
$computer[0]['GPU'] = "RTX 3090";
$computer[0]['RAM'] = "64GB RAM";
$computer[0]['Motherboard'] = "Z370";

$computer[1]['CPU'] = "i5-8400";
$computer[1]['GPU'] = "RTX 2080ti";
$computer[1]['RAM'] = "32GB RAM";
$computer[1]['Motherboard'] = "B450-A";

$computer[2]['CPU'] = "Athlon 2500";
$computer[2]['GPU'] = "RX 5700 XT";
$computer[2]['RAM'] = "16GB RAM";
$computer[2]['Motherboard'] = "X470";

$computer[3]['CPU'] = "i5-7400K";
$computer[3]['GPU'] = "GTX 1070";
$computer[3]['RAM'] = "8GB RAM";
$computer[3]['Motherboard'] = "B350M";

$computer[4]['CPU'] = "Ryzen 5 3600";
$computer[4]['GPU'] = "RX 590";
$computer[4]['RAM'] = "8GB RAM";
$computer[4]['Motherboard'] = "X370-PRO";

$computer[5]['CPU'] = "Ryzen 7 3700x";
$computer[5]['GPU'] = "Intel HD 630";
$computer[5]['RAM'] = "4GB RAM";
$computer[5]['Motherboard'] = "Z340";




$customer[0]['Name'] = "Milan";
$customer[0]['Age'] = "18";
$customer[0]['Sex'] = "Male";
$customer[0]['location'] = "Berlin";
$customer[0]['Married'] = "No";
$customer[0]['computer'] = $computer[0];

$customer[1]['Name'] = "Jaromír";
$customer[1]['Age'] = "45";
$customer[1]['Sex'] = "Male";
$customer[1]['location'] = "London";
$customer[1]['Married'] = "No";
$customer[1]['computer'] = $computer[1];

$customer[2]['Name'] = "Pepa";
$customer[2]['Age'] = "29";
$customer[2]['Sex'] = "Male";
$customer[2]['location'] = "Pardubice";
$customer[2]['Married'] = "Yes";
$customer[2]['computer'] = $computer[2];

$customer[3]['Name'] = "Zuzana";
$customer[3]['Age'] = "14";
$customer[3]['Sex'] = "Female";
$customer[3]['location'] = "Kolín";
$customer[3]['Married'] = "Yes";
$customer[3]['computer'] = $computer[3];

$customer[4]['Name'] = "Martin";
$customer[4]['Age'] = "26";
$customer[4]['Sex'] = "Male";
$customer[4]['location'] = "Praha";
$customer[4]['Married'] = "No";
$customer[4]['computer'] = $computer[4];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computers</title>
</head>
<body>
    <?php
for ($i=0; $i < 5; $i++) { 
    echo $customer[$i]['Name'] . " -- " . $customer[$i]['computer']['CPU'] . ",  " . $customer[$i]['computer']['GPU'] . ",  " . $customer[$i]['computer']['RAM'] . ",  " . $customer[$i]['computer']['Motherboard'];
    ?> <br>
    <?php
}
?>
</body>
</html>