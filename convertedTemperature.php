
<!DOCTYPE html>
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
    width: 700px;
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
body{
    font-size: 20px;
    
}
    </style>
</head>
<body>
    <div class="continer">
        <h1>Write your temperature</h1>
        <form method= "post" action="">
        <input class="input" type="number" name="enter" placeholder="ENTER YOUR VALU" required>
        <select class="input" name="sharch" >
            <option value="cel">Celsius</option>
            <option value="fer">Fahrenheit</option>
        </select><br><br>
        <button class="btn" type="SUBMIT">SUBMIT</button>
        </form><br>
  
    <div id="ruselt">
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $enter =$_POST["enter"];
        $sharch =$_POST["sharch"];
    }
    switch($sharch){
        case "cel";
        $ruselt = (($enter*9/5)+32);
        echo "Ruselt : " .$ruselt;
        break;
        case "fer";
        $ruselt = (($enter-32)*5)/9;
        echo "Ruselt : ". $ruselt;
        break;
        default;
        echo "Inter you currect valu";
        break;

    }
    ?>
    </div>
</div>
</body>

</html>