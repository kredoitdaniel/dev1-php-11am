<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

    <div class="card w-25 mx-auto my-3">
        <div class="card-header">Form Handling</div>
        <div class="card-body">
            <form action="" method="post">
                <input type="text" name="username" id="" class="form-control" placeholder="username">
                <input type="password" name="password" id="" class="form-control my-3" placeholder="password">

                <div class="form-check-inline">
                    <input type="radio" name="gender" id="male" value="male" class="form-check-input">
                    <label for="male" class="form-check-label">Male</label>
                </div>

                <div class="form-check-inline">
                    <input type="radio" name="gender" id="female" value="female" class="form-check-input">
                    <label for="female" class="form-check-label">Female</label>
                </div>
                
                <input type="submit" name="submit" value="submit" class="btn btn-primary w-100 my-3">
            </form>


        </div>

        <?php

            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $gender = $_POST['gender'];

                echo "<div class='bg-info'>";
                echo "Username: " . $username . "<br>";
                echo "Password: " . $password . "<br>";
                echo "Gender: " . $gender . "<br>";
                echo "</div>";
            }
        
        ?>
    </div>
    
    

</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        echo "<div class='bg-info w-25 mx-auto'>";
        echo "Username: " . $username . "<br>";
        echo "Password: " . $password . "<br>";
        echo "Gender: " . $gender . "<br>";

    }
?>