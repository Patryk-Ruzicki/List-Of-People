<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Results</title>
</head>
<body>
<h2>Results</h2>
<?php
$name = $_GET['name'];
$surname = $_GET['surname'];
$nickname = $_GET['nickname'];
$gender = $_GET['gender'];
$telephone = intval($_GET['telephone']);
$mail = $_GET['mail'];
$country = $_GET['country'];
@$polish = $_GET['polish'];
@$english = $_GET['english'];
@$deutsch = $_GET['deutsch'];
@$other = $_GET['other'];
$hobby = $_GET['hobby']; 

    echo "The order looks as follows";
    echo "<br/>name: $name";
    echo "<br/>surname: $surname";
    echo "<br/>nickname: $nickname";
    echo "<br/>gender: $gender";
    echo "<br/>telephone: $telephone";
    echo "<br/>mail: $mail";
    echo "<br/>country: $country";
    echo "<br/>languages: $polish";
    echo " $english";
    echo " $deutsch";
    echo " $other";
    echo "<br/>hobby: $hobby";

@ $wp=fopen("list_of_people.txt",'a'); //open file "list_of_people.txt" in append modex
if(!$wp){
    echo "<br> At this moment, you cannot save the order. Try later! </body></html>";
    exit;
}
$CurrentDate = date("H:i, jS F");
echo "<p>Order accepted at ".$CurrentDate."</p>"; //date
$outputText = "$CurrentDate\t"."$name\t"."$surname\t"."$nickname\t".
                                "$gender\t"."$telephone\t"."$mail\t"."$country\t".
                                "$polish\t"."$english\t"."$deutsch\t"."$other\t"."$hobby\n";
fwrite($wp, $outputText);
fclose($wp);
?>
</body>
</html>