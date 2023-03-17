<?php include('quiz_db.php');?>
<?php session_start(); ?>
<?php
$number = (int)$_GET['n'];
$query = "SELECT * FROM questions";
    $results = $mysqli->query($query);
    $total = $results->num_rows;

$query = "SELECT * FROM questions WHERE question_number = '$number'";
$result = $mysqli->query($query);
$question = $result->fetch_assoc();
$query = "SELECT * FROM choices WHERE question_number = '$number'";
$choices = $mysqli->query($query);
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
        
    

        <div class="alert alert-info">Question <?php echo $question['question_number'];?> of <?php echo $total;?></div>
        <p class="question">
           <?php echo $question['text'];?>
        </p>
        <form method="post" action="process.php">
            <ul class="choices">
            <?php while($row=$choices->fetch_assoc()):?>
<li><input class="form-check-input" name="choice" type="radio" value="<?php echo $row['id'];?>"/><?php echo $row['text']?></li>
<?php endwhile; ?>
</ul>
<input class="btn btn-primary"type="submit" value="Next">
<input type="hidden" name="number" value="<?php echo $number;?>"/>
    </div>

<!-- <footer>
    <div class="container">
        Copyright &copy; 2014, PHP Quizzer
    </div>
</footer> -->
</body>
</html>

