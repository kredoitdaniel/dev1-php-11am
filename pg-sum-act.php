<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pg-sum-act.php</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<!-- parent div-->

<div class="card text-dark text-center bg-light mx-auto mt-3 w-25" >

    <div class="card-header"><h6>pg-sum-act<h6></div>
        <div class="card-body mx-auto">
            <form action="" method="post">
                <div class="row m-auto">
                    <div class="col">
                        <input type="number" class="form-control" name="num1" id="num1" placeholder="First Number">
                    </div>
                    <br>
                </div>
                <br>
                <div class="row m-auto">
                    <div class="col">
                       <input type="number" class="form-control" name="num2" placeholder="Second Number">
                    </div>
                </div>
                <input type="submit" value="Compute" class="btn btn-primary mt-3" name="compute"></input>
            </form>
        </div> <!--end of card-body-->

            <!-- 1st answer -->
            <?php
                if(isset($_POST['compute'])){  
                    $num_1 = $_POST['num1'];
                    $num_2 = $_POST['num2'];
                    $sum = $num_1 + $num_2;  
            ?>
                    <div class='bg-primary text-white'>
                        First Number: <?= $num_1 ?><br>
                        Second Number: <?= $num_2 ?>
                        <p class="h5 mt-2">The sum is: <?= $sum ?></p>
                    </div>
            <?php
                }
            ?>
        

</div> <!--end of parent div-->


</body>
</html>

<!-- 2nd answer below -->
<?php
    if(isset($_POST['compute'])){  
    $num_1 = $_POST['num1'];
    $num_2 = $_POST['num2'];
    $sum = $num_1 + $num_2;

    echo "<div class='card card-body bg-primary text-white text-center mx-auto mt-3 w-25'>
        First Number: $num_1<br>
        Second Number: $num_2<br>
        The sum is: $sum
        </div>";
    }

?>
