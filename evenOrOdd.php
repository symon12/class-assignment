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
    <h1>Check Eeven or Odd</h1> 
    <form method="Post" action="">
        <input class="input" name="number" type="text" placeholder="Inter Your Valu" required><br><br>
        <button class="btn" type="submit">Submit</button><br><br>
    </form> 
    <div id="ruselt">
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $number = $_POST["number"];
         if($number%2){
            echo "Your Number is Even";
         }else{
            echo "Your Number is Odd";

           }
        }
        ?>
    </div>
    </div>
</body>
</html>