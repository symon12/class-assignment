<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.input{
    font-size: 1rem;
    padding: 10px;
    border-radius: 10px;
}

.continer{
    text-align: center;
    border: 1px solid #ddd;
    margin: auto;
    background-color: rgb(200, 200, 200);
    width: 530px;
    height: 300px;
    border-radius: 7px 10px;
    box-shadow: 10px darkblue;
    
}
.btn{
    font-size: 22px;
    height: 40px;
    width: 135px;
    border-radius: 7px;
    
}
.btn:hover{
    color: #dc3545;
    background-color: #fff;

}
</style>
</head>
<body>
    <div class="continer">
    <h1>Comparison Tool</h1> 
    <form method="Post" action="">
        <input class="input" name="number" type="text" placeholder="Inter Your Valu" required><br><br>
        <input class="input" name="number2" type="text" placeholder="Inter Your Valu" required><br><br>
        <button class="btn" type="submit">Submit</button><br><br>
    </form> 
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $number = $_POST["number"];
            $number2 = $_POST["number2"];
        }
        $largerNumber  = $number > $number2 ? $number : ($number2 > $number ? $number2 : "Numbers are equal");
             

        if($number!=$number2){
            echo "<p>Larger Number: $largerNumber</p>";
        }
        else{
            echo "<p>Result: $largerNumber</p>";
        }
        ?>
    </div>
</body>
</html>