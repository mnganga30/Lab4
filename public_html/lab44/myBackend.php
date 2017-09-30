
<?php

$twoD = array(array());
$val = 0;

function printArr(){
// fill the array
for($r = 0; $r < 101; $r++) {
for($c = 0; $c < 101; $c++)
    $twoD[$r][$c] = $r * $c;
}

// print the current value of $val
echo $val."<br/>------------------<br/>";

// print the array
// for($r = 0; $r < 4; $r++) {
// for($c = 0; $c < 4; $c++)
//     echo $twoD[$r][$c];
// echo "<br/>";
// }

$html = '<table>';
// header row
$html .= '<tr>';
foreach($twoD[0] as $key=>$value){
        $html .= '<th>' . htmlspecialchars($key) . '</th>';
    }
$html .= '</tr>';

// data rows
foreach( $twoD as $key=>$value){
    $html .= '<tr>';
    foreach($value as $key2=>$value2){
        $html .= '<td>' . htmlspecialchars($value2) . '</td>';
    }

    $html .= '</tr>';
  }
    $html .= '</table>';
    return $html;

}

echo printArr();
?>
