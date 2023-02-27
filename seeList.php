<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zamówienia klientów</title>
</head>
<body>
<h2>Zamowienia klientów</h2>
<?php
@ $wp = fopen("zamowienia.txt",'r');
if(!$wp)
    {
        echo "<br />W tym momencie brak zamówień";
        echo "</body></html>";
        exit;
    }
while(!feof($wp))
{
$listOP = fgets($wp, 999);
echo $listOP.' <br />';
}
fclose($wp);
?>
</body>
</html>