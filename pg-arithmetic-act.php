<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 3</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<!-- parent div-->
<div class="card text-dark text-center bg-light mx-auto mt-3 w-25">

    <div class="card-header"><h6>pg-arithmetic-act<h6></div>
        <div class="card-body">
            <form action="" method="post">
                <input type="number" class="form-control" name="num1" id="num1" placeholder="First Number">
                <input type="number" class="form-control my-3" name="num2" placeholder="Second Number">
                <input type="submit" value="Compute" class="btn btn-primary mt-3" name="compute"></input>
            </form>

        </div> <!--end of card-body-->
</div> <!--end of parent div-->

</body>
</html>

<?php
    if(isset($_POST['compute'])){  
    $num_1 = $_POST['num1'];
    $num_2 = $_POST['num2'];
    $sum = $num_1 + $num_2;
    $diff = $num_1 - $num_2;
    $prod = $num_1 * $num_2;
    $quot = $num_1 / $num_2;

    echo "<div class='card card-body bg-secondary text-white text-center mx-auto mt-3 w-25'>
        First Number: $num_1<br>
        Second Number: $num_2
    </div>";
    
    echo "<div class='card card-body bg-primary text-white text-center mx-auto mt-3 w-25'>
    The sum is: $sum<br>
    The difference is: $diff<br>
    The product is: $prod<br>
    The quotient is: $quot";
    }
?>




