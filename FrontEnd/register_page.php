<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #333;">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-underline ">
            <li class="nav-item">
              <a class="nav-link" href="index.php" style="color:white;">Home</a>
            </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#" style="color:white">Info</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#" style="color:white">Character Creator</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" aria-current="page" href="#" style="color:white">Group Manager</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white">
                    <?php
                    session_start(); 
                     if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                      echo $_SESSION["username"];
                     }else{
                      echo 'Account';
                     }
                    ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" style="background-color: #333;">
                    <?php 
                      if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                        echo '<li><a class="dropdown-item" style="color: white;" href="../BackEnd/logout.php">Log Out</a></li>';
                      }else{
                        echo '<li><a class="dropdown-item" style="color: white;" href="login_page.php">Log In</a></li>';
                        echo '<li><a class="dropdown-item" style="color: white;" href="register_page.php">Register</a></li>';
                      }
                      ?>
                    </ul>
                </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="form-div">
        <form action="../BackEnd/register.php" method="post">
          <label for="username" style="color:white">Username:</label>
          <input type="text" id="username" name="username"><br><br>

          <label for="password" style="color:white">Password:</label>
          <input type="password" id="password" name="password"><br><br>

          <input type="submit" value="Submit">
        </form>
      </div>
    <footer>
      <p>Made By Adam Hlaváčik</p>
    </footer>
</body>
</html>