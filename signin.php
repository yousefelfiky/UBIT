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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $dbpassword = "";
        $dbname = "ubitdb";

        $conn = mysqli_connect($servername, $username, $dbpassword, $dbname);

        $name = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM user WHERE name='$name'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row["password"] == $password) {
                // Redirect to homepage
                header("Location: AIO.html");
                exit;
            } else {
                echo "Incorrect password";
            }
        } else {
            echo "Username not found. Please create an account.";
        }

        $conn->close();
    }
?>

</head>
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
          </li>
        <li class="nav-item">
            <a class="nav-link navbar-brand" href="#">Home <span class="sr-only"></span></a>
          </li>
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
    </div>
  </nav>

  <!-- Body -->


  <div class="social-icons">
    
<a href="facebook.com"> <img src="/images/facebook.svg"  alt=""> </a>
<a href="facebook.com"> <img src="/images/instagram.svg"  alt=""> </a>
  <a href="facebook.com"> <img src="/images/linkedin.svg"  alt=""> </a>

  </div>

  <div class="container">
    <h1 class="text-center my-5">Sign in</h1>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="signin.php" method="POST">
          <div class="form-group">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" class="form-control" required>
          </div>
  
          <br>
          
          <div class="form-group">
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" class="form-control" required>
          </div>
          <br>
  
          <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <p class="text-center mt-3">Don't have an account? <a href="signup.php">Sign up</a></p>
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
