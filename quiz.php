<?php include('quiz_db.php');?>

<?php

$query = "SELECT * FROM questions";
$results = $mysqli->query($query);
$total = $results->num_rows;
?>
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
        
    
    
            <h2>Test Your PHP Knowledge</h2>
            <p>Multiple choice quizz</p>
            <ul>
                <li class="list-items"><strong>Number of questions:</strong><?php echo $total;?></li>
                <li class="list-items"><strong>Type:</strong>Multiple choice</li>
                <li class="list-items"><strong>Estimated time:</strong><?php echo $total*.5;?>minutes</li>
</ul>
                <a href="question.php?n=1" class="btn btn-primary">Start quiz</a>
        </div>
   
<!-- <footer>
<div class="container">
    Copyright &copy; 2014, PHP Quizzer
</div>
</footer> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
