<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries Visited</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

     <style>
         /* .form-control {
             width: 300px;
         } */
     </style>
</head>
<body>

<!-- parent div-->
<div class="card text-dark text-center bg-light mx-auto mt-3 w-25">
    <div class="card-header bg-secondary text-white"><h6 class="my-1">Countries Visited<h6></div>
        <div class="card-body mx-auto">
            <form action="" method="post">
                <label for="numcountry">Number of Countries Visited?</label>
                <input type="number" class="form-control mt-2" id="numcountry" name="numcountry">
                <input type="submit" value="Submit" class="btn btn-danger mt-2 w-100" name="submit"></input>
            </form>
        </div> <!--end of card-body-->
</div> <!--end of parent div-->

</body>
</html>

<?php

        //  1st function
        function numCountry($numcountry){
            echo "<div class='card card-body bg-success text-white mx-auto mt-4 w-25'>";
            echo "<form method='post'>";
            for($count = 0; $count < $numcountry; $count++){
                echo "<input type='text' class='form-control mx-auto my-1' name='countries[]'>";
            } 
            echo "<input type='submit' value='Save' class='btn btn-danger mt-2' name='save'>";
            echo "</form>";
            echo "</div>";
        }


        //  1st isset
        if(isset($_POST['submit'])){
            $numcountry = $_POST['numcountry'];

            numCountry($numcountry);
        }

        /*--------------------------------------------------*/ 


        // 2nd function
        function displayCountries($countries){
            echo "<div class='card card-body bg-success text-white mx-auto mt-4 w-25'>";
            echo "<h6>You have been to:</h6>";
            foreach($countries as $country){
                echo $country . "<br>";
            }
        }


        // 2nd isset
        if(isset($_POST['save'])){
            $countries = $_POST['countries'];

            displayCountries($countries);
        }

?>


