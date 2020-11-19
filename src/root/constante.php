<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
define("KOERS", 40.3399);
$belg_fr = 84613.29;
$euro = $belg_fr/constant("KOERS");

echo "De koers is: ".constant("KOERS")."<br>";
echo "De waarde in bfr bedraagt: ".$belg_fr."<br>";
echo "Omegerekend naar eur is datr dan: ".$euro;

?>
</body>
</html>
