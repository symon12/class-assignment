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
    width: 630px;
    height: 350px;
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
    <h1>CALCULATOR</h1> 
    <form method="Post" action="">
        <input class="input" name="number" type="text" placeholder="Inter Your Valu" required><br><br>
        <input class="input" name="call" type="text" placeholder="Inter Your Valu" required><br><br>
        <select class="input" name ="optional">
            <option value="cal1">Addition</option>
            <option value="cal2">Subtraction</option>
            <option value="cal3">Multiplication</option>
            <option value="cal4">Division</option>
        </select><br><br>
        <button class="btn" type="submit">Submit</button><br><br>
    </form> 
    <div id="ruselt">
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $number = $_POST["number"];
            $call = $_POST["call"];
            $optional = $_POST["optional"];
            switch($optional){
                case "cal1";
                $ruselt= $number + $call;
                echo "Ruselt : $ruselt";
                break;
                case "cal2";
                $ruselt= $number - $call;
                echo "Ruselt: $ruselt";
                break;
                case "cal3";
                $ruselt= $number * $call;
                echo "Ruselt: $ruselt";
                break;
                case "cal4";
                if($call!=0){
                    $ruselt= $number /$call;
                    echo "Ruselt : $ruselt";
                }
                else{
                    echo "You not divide by zero.";
                }
                break;
            }
        }
        ?>
    </div>
    </div>
</body>
</html>