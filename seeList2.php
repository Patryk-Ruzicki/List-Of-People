<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>See List Of People</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<h2>List Output</h2>
<?php
    //reading the contents of the entire order file.txt to the board $ order
    $listOP = file('list_of_people.txt');

    //reading the number of elements of the board $ order
    $countPeople = count($listOP);

    if($countPeople == 0) {
        echo '<p> Empty List. </p></body></html>';
        exit;
    }

    //creating a table header in HTML
    echo "<table>\n<tr>";
    echo "<th>Date</th>".
        "<th>Name</th>".
        "<th>Surname</th>".
        "<th>Nickname</th>".
        "<th>Gender</th>".
        "<th>Telephone</th>".
        "<th>Mail</th>".
        "<th>Country</th>".
        "<th>Languages</th>".
        "<th>Hobby</th></tr>";

    for($i = 0; $i < $countPeople; $i++){
        //explode each line against tabs and write to the array $line
        $line = explode("\t", $listOP[$i]);

        //displaying each order
        echo "<tr><td>$line[0]</td>".
                "<td>$line[1]</td>".
                "<td>$line[2]</td>".
                "<td>$line[3]</td>".
                "<td>$line[4]</td>".
                "<td>$line[5]</td>".
                "<td>$line[6]</td>".
                "<td>$line[7]</td>".
                "<td>$line[8] $line[9] $line[10] $line[11]</td>".
                "<td>$line[12]</td>";
    }
    echo "<tr></table>"
?>
</body>
</html>