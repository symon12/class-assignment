<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>

</head>
<body>

    <h2>PERSONAL INFORMATION</h2>
    <?php
        $name="Sharwar Hossain Saymon";
        $age = 22;
        $country = "Bangladesh";
           
    ?>
    <table>
    <tr>
                <th>Name </th>
                <td>: <?php echo $name ?></td>
            </tr>
            <tr>
                <th>Age </th>
                <td>: <?= $age ?> Years</td>
            </tr>
            <tr>
                <th>Country </th>
                <td>: <?php echo $country?></td>
            </tr>
            <tr>
                <th>Personal Brif </th>
                <td>: <?php printf("My name is %s and I live in %s", $name, $country); ?></td>
            </tr>
    </table>
    </div>
    </body>
</html>