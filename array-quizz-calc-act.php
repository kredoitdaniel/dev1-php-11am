<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Average Calculator</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <form action="" method="post">
        <div class="card mt-5 mx-auto w-25">
            <div class="card-header bg-secondary text-white text-center">
                <h1 class="h3">Quiz Average Calculator</h1>
            </div>
            <div class="card-body">
                <input type="number" name="num_quiz" class="form-control my-1" placeholder="Enter number of quizzes" max="10">
                <input type="submit" name="btn_generate" class="btn btn-danger form-control mt-3" value="Submit"></input>
            </div>
        </div>
    </form>
</body>
</html>

<?php
        //1st isset   
        function numQuiz($num_quiz){
            echo "<div class='card card-body bg-success text-white mx-auto mt-4 w-25'>";
            echo "<form method='post'>";
            for($count = 1; $count <= $num_quiz; $count++) {
                echo "Quiz $count";
                echo "<input type='number' class='form-control' name='grades[]'>";
            }
            echo "<input type='submit' value='average' class='btn btn-danger mt-2' name='compute'></input>";
            echo "</form>";
            echo "</div>";
        }

        //1st isset
        if(isset($_POST['btn_generate'])) {
            $num_quiz = $_POST['num_quiz'];

            numQuiz($num_quiz);
        }

        /* -------------------------------------------------------------------------------------------- */

        //2nd function using foreach loop
        function quizAverage($grades){
            $average = 0;
            echo "<div class='card card-body bg-success text-white mx-auto mt-4 w-25'>";
            echo "Quizzes Results <br>";
            
            foreach($grades as $grade){
                echo $grade . "<br>";
                $average = $average + $grade;  
            }
            echo "</div>";
            echo "<div class='card card-body bg-success text-white mx-auto mt-4 w-25'>";
            echo "Average is: " . $average / count($grades);
            echo "</div>";
        }

        //2nd isset
        if(isset($_POST['compute'])){
            $grades = $_POST['grades'];
            
            quizAverage($grades);
        }

?>
    

