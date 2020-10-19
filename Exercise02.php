<!DOCTYPE
<html>
<body>

<P style="font-size: 45px; font-family: Lucida Handwriting Italic;"><b>Calculator</b></p>
<form action=" " method="POST">
    <p style="font-size:15px"><b>Input First number:</b></p>
    <input type=text name="n1" placeholder="Enter a number">
    <br>
    <p style="font-size:15px"><b>Input Second number:</b></p>
    <input type=text name="n2" placeholder="Enter a number">
    <br>
    <button type="submit" name="submit1" value="submit1">Add(+)</button>
    <button type="submit" name="submit2" value="submit2">Substract(-)</button>
    <button type="submit" name="submit3" value="submit3">Multiply(*)</button>
    <button type="submit" name="submit4" value="submit4">Divide(/)</button>

</form>

<?php
    if (isset($_POST['submit1'])){
        $num1=$_POST['n1'];
        $num2=$_POST['n2'];
        $sum=$num1+$num2;
        echo 'The sum is:' . $sum;
    }
    else if (isset($_POST['submit2'])){
        $num1=$_POST['n1'];
        $num2=$_POST['n2'];
        $diff=$num1-$num2;
        echo 'The Difference is:' . $diff;
    }
    else if (isset($_POST['submit3'])){
        $num1=$_POST['n1'];
        $num2=$_POST['n2'];
        $pro=$num1*$num2;
        echo 'The Product is:' . $pro;
    }
    else if (isset($_POST['submit4'])){
        $num1=$_POST['n1'];
        $num2=$_POST['n2'];
        $quo=$num1/$num2;
        echo 'The Quotient is:' . $quo;
    }
    
?>

</body>
</html>