<!DOCTYPE
<html>
<body>

<p style="font-size: 45px; font-family: Comic Sans MS;"><b>Finding The GCD</b></p>
<form action=" " method="POST">
    <p style="font-size:15px"><b>Input First number:</b></p>
    <input type=text name="n1" placeholder="Enter a number">
    <br>
    <p style="font-size:15px"><b>Input Second number:</b></p>
    <input type=text name="n2" placeholder="Enter a number"><br>
    <br>
   <button type="submit" name="calcu" value="submit"><p align=left>Calculate</p></button> 
   <br>
   <br>
<?php
    if (isset($_POST['calcu']))
    {
    $num1=$_POST['n1'];
    $num2=$_POST['n2'];
        if ($num1>$num2)
        {
            $div=$num1/$num2;
            $mod=$num1%$num2;
            for ($cntr=$mod;$cntr=0;$cntr++)
            {
            $gcd=$num2*$div+$mod;
            }
            echo '<b>The GCD is: </b>' . $mod;
        }
        else 
        {
            $div1=$num2/$num1;
            $mod1=$num2%$num1;
            for ($cntr1=$mod1;$cntr1=0;$cntr1++)
            {
            $gcd1=$num1*$div1+$mod1;
            }
            echo '<b>The GCD is: </b>' . $mod1;
        }
    }
?>

</body>
</html>