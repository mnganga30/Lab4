<?php




// $ans[3] = $_POST['p4'];
// $ans[4] = $_POST['p5'];
// $ans[4] = $_POST['p6'];

function drawTable(){
  $productPrice = array(7,4,2,10,20, 10);
  $amount  = array(3);
  $amount[0] = $_GET['p1'];
  $amount[1] = $_GET['p2'];
  $amount[2] = $_GET['p3'];
  $shipping = $_GET['ship'];

$subPrice = array($amount[0]*$productPrice[0],$amount[1]*$productPrice[1],$amount[2]*$productPrice[2]);
$totalPrice = $subPrice[0] + $subPrice[1] + $subPrice[2] + $shipping;

 if($shipping == 50)
 {
   $shipType = "Over Night ";
 }
 else {
   if ($shipping == 5) {
     $shipType = "3 day ";
   }
   else {
     $shipType = "7 Day ";
   }
 }



echo "<table border='1'> <tr>
  <th align='center'>    </th>
              <th align='center'>Quantity</th>
                <th align='center'>Cost Per Item</th>
                  <th align='center'>Sub total</th>
</tr>

<tr>
<th align='center'>Camera</th>
    <td align='center'> $amount[0]</td>
    <td align='center'>$$productPrice[0]</td>

    <td align='center'>$$subPrice[0]</td>


    </tr>

    <tr>
    <th align='center'>Golden Pen</th>
        <td align='center'> $amount[1]</td>
        <td align='center'> $$productPrice[1]</td>

        <td align='center' >$$subPrice[1]</td>

        </tr>

        <tr>
        <th align='center'>High tech pen</th>
            <td align='center'> $amount[2]</td>
            <td align='center'> $$productPrice[2]</td>
            <td align='center'>$$subPrice[2]</td>

            </tr>

            <tr>
            <th align='center'>Shipping</th>
              <td> </td>
                <td align='center'> $shipType</td>
                <td align='center'> $shipping</td>

                </tr>
                <tr>
                <th align='center' >Total Price</th>
                <td> </td>
                <td> </td>
                <td align='center'> $$totalPrice</td>
                    </tr>



</table>";
}


function into()
{
  $password =$_GET['password'];

  echo "<div><h1>Check Out </h1>
         <p> Password: $password </p></div>";
}

into();
drawTable();
?>
