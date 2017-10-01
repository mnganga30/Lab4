<?php
$ans  = array(5);
$ans[0] = $_POST['q1'];
$ans[1] = $_POST['q2'];
$ans[2] = $_POST['q3'];
$ans[3] = $_POST['q4'];
$ans[4] = $_POST['q5'];

// $ans = array("$_POST['q1'];",
//              "$_POST['q2'];",
//              "$_POST['q3'];",
//              "$_POST['q4'];" );
$correctAns = array("a","b","c","d","e");

$ansValue = array("Kansas", "Red", "Washington D.C","2017", "Dark Vader");
$questions = array("What state is ku in ?",
                  "What color is on the USA State Flag?",
                  "What is the capital city of America?",
                  "What year is it?",
                  "Who is the luke's Sky father?");
$totalCorrect = 0;

if ($ans[0] == $ansValue[0]) { $totalCorrect++; }
if ($ans[1] == $ansValue[1]) { $totalCorrect++; }
if ($ans[2] == $ansValue[2]) { $totalCorrect++; }
if ($ans[3]== $ansValue[3]) { $totalCorrect++; }
if ($ans[4] == $ansValue[4]) { $totalCorrect++; }


for ( $i =0; $i<5;  $i++)
{
  $numQuestion=$i+1;
echo "<div id='results'>

<p>$numQuestion. $questions[$i]</p>
<ul>
<p>Your answer : $ans[$i]  </p>
<p>The Correct answer:  $ansValue[$i]</p>
</ul>

$totalCorrect / 5 correct</div>";

$precentage = ($totalCorrect / 5)*100;
}

echo "<div id='results'> $precentage% </div>";

?>
