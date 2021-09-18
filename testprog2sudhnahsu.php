

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    /* background: rgba(224, 212, 212, 0.432); */
    box-sizing: border-box;
    margin:0px;
    padding:0px;
}

.div{
    margin-top:200px;
    height: 50vh;
    margin-left: 500px;
    

}

</style>
<body>

<div class="div">

    <form action="" method="post">
        <input type="text" placeholder="Enter a Number... " name = "numb">
        <input type="text" placeholder="Enter a Number... " name = "numb2">
        <OL>
            <LI>ADDITION</LI>
            <LI>SUBTRACTION</LI>
            <LI>DIVISION</LI>
            <LI>MULTIPLICATION</LI>
            <LI>EXPONENT</LI>
        </OL>
        <input type="text" placeholder="Enter CHOICE... " name = "inp">
        
        <button type="submit" class="btn btn-primary">Submit</button>
    
    </form>

<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $numb = $_POST['numb'];
    $numb2 = $_POST['numb2'];

    $c = $_POST['inp'];

    
    function calc($c,$numb,$numb2){
        
        switch ($c)
        {
            
            case 1:
                echo"<br>Addition: ";
                echo $numb+$numb2;
                break;
            
            case 2:
                echo"<br>Subtraction: ";
                echo$numb-$numb2;
                break;
            case 3:
                echo"<br>Division: ";
                echo$numb/$numb2;
                break;
            
            case 4:
                echo"<br>Multiplication: ";
                echo$numb*$numb2;
                break;
            
            case 5:    
                echo"<br>Exponent: ";
                echo$numb%$numb2;
                break;
                
            default:
                echo"choose correct option";
                break;
                
                
        }
            // else{
                
            //     echo"oopss";
            // }
        }
}
calc($c,$numb,$numb2);
?>

</div>

</body>
</html>




