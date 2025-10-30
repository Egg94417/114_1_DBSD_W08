SID:C112181111
<BR>
NAME:黃翊華
<p>
<?php 

$scores = array(22, 16, 30, 24);
$total = 0;

foreach ($scores as $element) {
   echo "$element ";
   $total += $element;
}
echo "<br/>得分總和: ". $total. "<BR>";
print_r($scores);   

?>