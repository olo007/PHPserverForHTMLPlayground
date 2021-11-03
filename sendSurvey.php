<!DOCTYPE html>
<html lang="en">
    <head>
        <title>sendSurvey</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        
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
        ?>
    </body>
</html>