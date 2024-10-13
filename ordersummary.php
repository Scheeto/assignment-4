<!DOCTYPE html PUBLIC>
<html>
<head>
    <title> Order Summary</title>
    <link href="ordersummary.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
if($_POST["items"] && $_POST["firstname"]&& $_POST["lastname"] && $_POST["street"] &&$_POST["city"] && $_POST["state"] &&$_POST["zip"])
{
    $items=$_POST["items"]
    $firstname=$_POST["firstname"]
    $lastname=$_POST["lastname"]
    $street=$_POST["street"]
    $city=$_POST["city"]
    $state=$_POST["state"]
    $zip=$_POST["zip"]
    $total=0;
    $shipping=0;

    ?>
    <h1>Order Summary</h1>
    <p>Thank you<? $firstname?> for your order to :</p>
    <p> <?=$street?></p>
    <p><?$city?>, <?$state?>, <?$zip?></p>
    <p>You ordered the followin</p>
    <table>
        <tr>
            <th>Item<th>
            <th>Price<th>
        </tr>
    <?php
        foreach($items as $item=>$price)(
            ?>
            <tr>
                <td><?= $item?></td>
                <td><?= $price?></td>
            </tr>
            <?php
            $total+=$price;
        )

        if($total<1000){
            shipping=25
        }
        elseif($total<5000){
            $shipping=50;
        }
        else{$shipping=10}
        ?>
        <tr>
            <td>Shipping</td>
            <td><?=$total?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td><?=$total?></td>
    </tr>
    </table>
    <?
}
else{
    ?>
    <a href="assignment4.html"> Return and complete form</a>
    <?php
}
?>
</html>