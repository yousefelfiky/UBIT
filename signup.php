<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
    <?php
// Establish a connection to the database
$servername = "localhost"; // Change this to your server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "agencydb"; // Change this to your database name

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the username from the form
  $username = $_POST["username"];

  // Prepare a SQL statement to check if the username already exists in the user table
  $sql = "SELECT * FROM user WHERE name='$username'";
  $result = mysqli_query($conn, $sql);

  // If there is a result, the username is already taken
  if (mysqli_num_rows($result) > 0) {
    echo "Sorry, that username is already taken.";
  } else {
    // Insert the new user into the user table
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "INSERT INTO user (name, email, password) VALUES ('$username', '$email', '$password')";
    if (mysqli_query($conn, $sql)) {
      header('location: AIO.html');
    } 
    else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
}

mysqli_close($conn);
?>

  </head>
<<<<<<< HEAD:signupubit.html
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
  <style>
    .navbar {
      border: none;
      background-color: white;
    }


    nav ul li { 
  
  margin-right: 25px; /* if the nav is on the left */ 
} 


.social-icons {
  position: fixed;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  z-index: 9999;
}

.social-icons  {
  width: 38px;
  display: block;
  margin-bottom: 10px;
  padding: 10px;
  background-color: #ffffff;
  color: #000000;
  border-radius: 50%;
}







    footer {
      background-color: #000;
      color: #fff;
      padding: 70px;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    input:hover {
  background-color: gray;
  border: #000000;
}

input {
  background-color: #000;
  color: rgb(255, 255, 255);
  font-size: 24px;
}

.centertext {
  
  display: flex;
			justify-content: center;
			align-items: center;
			padding-top: 150px;
      padding-bottom: 20px;
}

.titletext {
  font-size: 20px;
}

.btncustom:hover {
    background-color: #635c5c;
    color: white;
    border: #000000;

}

.btncustom {
    
    background-color: black;
    color: white;
    border-color: black;
    width: 100px;
    height: 40px;
    
}

.btn:hover {
  background-color: #000;
  color: white;
}




  </style>
</head>
<body>
  <!-- Navbar -->

 

  

  
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="AIO.HTML">
        <img src="UBIT.png" width="100" height="100" alt="logo" class="d-inline-block align-top">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
  
          <li></li><li></li><li></li><li></li><li></li><li></li>
          <li></li><li></li><li></li><li></li><li></li><li></li>
          <li></li><li></li><li></li><li></li><li></li><li></li>
          <li></li><li></li><li></li><li></li><li></li><li></li>
          <li></li><li></li><li></li><li></li><li></li><li></li>

          <li class="nav-item">
            <a class="nav-link active text-center" aria-current="page" href="project.html"><button type="button" class="btn btn-outline-secondary">Start A Project</button></a>
=======
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg text-center">
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li></li><li></li><li></li>
        <li></li><li></li><li></li>
        <li></li><li></li><li></li>
        <li></li><li></li><li></li>
        <li class="nav-item active">
            <a class="nav-link navbar-brand" href="AIO.HTML"><img width=120 height=120 src="/images/UBIT.png" alt=""> <span class="sr-only"></span></a>
>>>>>>> 2586b56acb11492c8485342b308d5fda01d58a77:signup.php
          </li>
         
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active text-center" aria-current="page" href="#">Aboud Us</a>
          </li>
<<<<<<< HEAD:signupubit.html
          <li class="nav-item">
            <a class="nav-link active text-center" aria-current="page" href="#">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-center" aria-current="page" href="signinubit.html">Sign In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-center" aria-current="page" href="signupubit.html">Sign Up</a>
          </li>
          </ul>
      </div>
=======
        <li class="nav-item">
          <a class="nav-link" href="#">About <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signin.php">Sign in</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="signup.php">Sign up</a>
        </li>
      </ul>
>>>>>>> 2586b56acb11492c8485342b308d5fda01d58a77:signup.php
    </div>
  </nav>

  <!-- Body -->


  <div class="social-icons">
    
<a href="facebook.com"> <img src="/images/facebook.svg"  alt=""> </a>
<a href="facebook.com"> <img src="/images/instagram.svg"  alt=""> </a>
  <a href="facebook.com"> <img src="/images/linkedin.svg"  alt=""> </a>

  </div>
  <div class="container">
    <h1 class="text-center my-5">Sign up</h1>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="signup.php" method="POST">
          <div class="form-group">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" class="form-control" required>
          </div>

          <br>
          
          <div class="form-group">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" class="form-control" required>
          </div>
          <br>

          <div class="form-group">
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" class="form-control" required>
          </div>
<br>
          <button type="submit" class="btncustom btn-primary">Sign up</button>
        </form>
        <p class="text-center mt-3">Already have an account? <a href="signin.php">Sign in</a></p>
      </div>
    </div>
  </div>
      
  <!-- Footer -->
  <footer class="text-center">
    <p>&copy; 2023 UBIT. All Rights Reserved.</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>