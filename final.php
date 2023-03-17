<?php session_start(); ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>PHP Quizzer</title>
        <link rel="stylesheet" href="quiz.css" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    
    <body> 
        
            <div class="container">
                <h1>Quiz</h1>
            
       
        
                <h2>You're Done!</h2> 
                <p class = "alert alert-success">Congrats! You have completed the test</p>
                <p>Final Score: <?php echo $_SESSION['score'];?> </p> 
                <a href="question.php?n=1" class="btn btn-primary">take again</a>
            </div>
        
        <!-- <footer>
            <div class="container">
                Copyright &copy; 2014, PHP Quizzer
            </div>
        </footer> -->
    </body>
    </html>
    <?php session_destroy(); ?>
    

