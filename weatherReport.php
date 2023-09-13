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
    height: 330px;
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
<body>
    <div class="continer">
        <h1>Please Search Your  Weather Report</h1>
        <form method= "post" action="">
        <input class="input" type="number" name="weather" placeholder="ENTER YOU VALU" required><br><br>
        <button class="btn" type="SUBMIT">SUBMIT</button>
        </form><br>
  
    <div>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $weather =$_POST["weather"];
    }
    $repot = "";

    if($weather>=20){
        $repot = "It's warm";
    }
    elseif($weather>=1){
        $repot=  "It's cool.";
    }
    
    else {
        $repot= "It's freezing!";
    }
    echo "<h3> $weather </h3>";

    echo " <h2> Weather : $repot <br></h2>" ;

    ?>
    </div>
</div>
</body>

</html>