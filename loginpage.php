<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loginpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <div class="split-screen">
        <div class="left">
            <section class="copy">
            </section>
        </div>

        <div class="right">
            
            <form action="login.php" method="post">
                <section class="copy">
                    <div class="img"><img src="logo (1).png" alt="Cresent-Logo"></div>
                    <h2>LOGIN</h2>
                    
                </section>
                
                <div class="input-container">
                    
                    <label for="registernumber">REGISTER NUMBER</label>
                    <input type="text" id="registernumber" placeholder="Enter your Register Number" name="registernumber" autocomplete="off" required>
                    <i class="fas fa-id-badge"></i>
                </div>
                
                

                <div class="input-container">
                    <label for="password">PASSWORD</label>
                    <input type="password" id="password" placeholder="Enter your Password" name="password" title="Enter your password" autocomplete="off" required>
                    <i class="fas fa-lock"></i>
                </div>
                

             <a href="forgetpassword.php" class="float-end">Forget password?</a>
            
                <button class="signup-btn" type="submit"> LOGIN </button>
                
                
                <button class="bt" onclick="myFunction()">NEW USER-CLICK HERE TO REGISTER</button>
        <div id="register">
        <p class="link">ARE YOU ?</p>
        <p class="link"><i class="fas fa-user"></i>
        <a href="adminregister.php">ADMIN</a><a href="studentregister.php"> /STUDENT</a><a href="facultyregister.php"> / FACULTY</a></p>
       </div>
                    
                    
            </form>
        </div>
    </div>
    </div>
    
  <script src="log.js"></script>
  <script type="text/javascript">
    
    function myFunction() {
  var x = document.getElementById("register");
  if (x.style.display === "block") {
    x.style.display = "none";
    
  } else {
    x.style.display = "block";
    
  }
  
}







</script>

</body>
</html>

