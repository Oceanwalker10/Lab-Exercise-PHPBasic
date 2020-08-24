<html>
<head>
<title>Exercise 8-7</title>
</head>
<body>
<h1>Simple Calendar using Loops</h1>

<table border="1">

<tr>
  <th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th>
</tr>
<?php 
$day = 0;
$dayOne = date("w",mktime(0,0,0,date("n"),1, date("Y")));
$started = false;
$dayCount = 0;

// Step 4 - set the lenght of month in days.
$daysinMonth = date("28");

while ($day<$daysinMonth) {
    // when we need a new row go ahead.
    if($dayCount%7 == 0) {
        echo "</tr><tr>";
    }
    // add the check to start out the month on the right day.
    if(!started) {
        if($dayCount == $dayOne) {
            $started = true;
            echo "<td>".($day+1)."</td>";
        }
    }
    echo "<td>".($day + 1). "</td>";
    $day++;
    $dayCount++;
}
?>

</table>


</body>
</html>