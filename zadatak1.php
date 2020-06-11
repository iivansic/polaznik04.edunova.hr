<?php
$b1=$_GET['b1'];
$b2=$_GET['b2'];
echo "<table style='width:100%'>","<tr>","<td>", $b1 + $b2,"</td>","<td>", $b1 - $b2,"</td>","<td>",
 $b1 * $b2,"</td>","<td>", $b1/$b2 ,"</td>","</tr>","</table>";
