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
    height: 430px;
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
        <h1>Please Enter Your Ruselt Score</h1>
        <form method= "post" action="">
        <input class="input" type="number" name="grade1" placeholder="ENTER YOU VALU" required><br><br>
        <input class="input" type="number" name="grade2" placeholder="ENTER YOU VALU" required><br><br>
        <input class="input" type="number" name="grade3" placeholder="ENTER YOU VALU" required><br><br>
        <button class="btn" type="SUBMIT">SUBMIT</button>
        </form><br>
  
    <div>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $grade1 =$_POST["grade1"];
        $grade2 =$_POST["grade2"];
        $grade3 =$_POST["grade3"];
    }
    $allGrade=($grade1 + $grade2 + $grade3 ) /3;
    $gread = "";

    if($allGrade>=80){
        $gread= "A";
    }
    elseif($allGrade>=70){
        $gread=  "B";
    }
    elseif($allGrade>=60){
        $gread= "C";
    }
    elseif($allGrade>=50){
        $gread= "D";
    }
    else {
        $gread = "F";
    }

    echo " <h3>GRADE : $gread <br></h3>" ;

    echo "<h3>SCORE : $allGrade </h3> ";

   

    ?>
    </div>
</div>
</body>

</html>
