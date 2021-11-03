<!DOCTYPE html>
<html lang="en">
    <head>
        <title>sendSurvey</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        require_once "connect.php";
        $con=@new mysqli($host,$db_user,$db_password,$db_name);

        if($con->connect_errno!=0){
            echo "Error".$con->connect_errno;//." Description ".$con->connect_error;
        }else{
            $userName=$_POST['name']; 
            if(!isset($_POST['isClickerGood']))
            {
                $isClickerGood =false;
            } else {
                $isClickerGood = true;
            }
            if(!isset($_POST['isTicTacToeGood']))
            {
                $isTicTacToeGood = false;
            } else {
                $isTicTacToeGood = true;
            }
            if(!isset($_POST['isRockPaperScissorsGood']))
            {
                $isRockPaperScissorsGood = false;
            } else {
                $isRockPaperScissorsGood = true;
            }
            if(!isset($_POST['isSurveyGood']))
            {
                $isSurveyGood = false;
            } else {
                $isSurveyGood = true;
            }
            $remarkText=$_POST['remarkArea'];
            echo "<h2 style='color:red'>Thank you for using this project $userName</h2>";
            if($isClickerGood){
                echo "<h4>You like Clicker</h4>";
            }else{
                echo "<h4 style='color:brown;'>You don't like Clicker</h4>";
            }
            if($isTicTacToeGood){
                echo "<h4>You like Tic Tac Toe</h4>";
            }else{
                echo "<h4 style='color:brown;'>You don't like Tic Tac Toe</h4>";
            }
            if($isRockPaperScissorsGood){
                echo "<h4>You like Rock Paper Scissors</h4>";
            }else{
                echo "<h4 style='color:brown;'>You don't like Rock Paper Scissors</h4>";
            }
            if($isSurveyGood){
                echo "<h4>You like the survey :-)</h4>";
            }else{
                echo "<h4 style='color:brown;'>You don't like the survey :-(</h4>";
            }
            echo "<h4><i>You send following remark:</i></h4>";
            echo $remarkText;

            if($con->query("INSERT INTO answers VALUES('$userName','$isClickerGood','$isTicTacToeGood','$isRockPaperScissorsGood','$isSurveyGood','$remarkText',NULL)")){
                echo "<h4 style='color:green;'>Data added to database</h4>";
            }else{
                throw new Exception($con->error);
            }
            $con->close();
        }
        ?>
    </body>
</html>