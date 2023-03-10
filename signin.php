<?php
include("const.php");
include("connect.php");
include("navbar.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <?php
  if (isset($_POST['submit'])) {

    $name = $_POST["name"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user WHERE name='$name'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);

      if ($row["password"] == $password) {
        $_SESSION['id'] = $row["id"];
        $_SESSION['name'] = $row["name"];

        if (isset($_SESSION['id'])) {
          header('location: index.php');
        }
      } else {
        echo "Incorrect password";
      }
    } else {
      echo "Username not found. Please create an account.";
    }
  }
  ?>
</head>

<body>
  <div class="social-icons">

    <a href="facebook.com"> <img src="/images/facebook.svg" alt=""> </a>
    <a href="facebook.com"> <img src="/images/instagram.svg" alt=""> </a>
    <a href="facebook.com"> <img src="/images/linkedin.svg" alt=""> </a>

  </div>
  <div class="container">
    <h1 class="text-center my-5">Sign in</h1>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="signin.php" method="POST">
          <div class="form-group">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="name" class="form-control" required>
          </div>

          <br>

          <div class="form-group">
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" class="form-control" required>
          </div>
          <br>
          <button type="submit" name="submit" class=" btncustom btn-primary">Sign in</button>
        </form>

        <p class="text-center mt-3">Don't have an account? <a href="signup.php">Sign up</a></p>
      </div>
    </div>
  </div>
  <br><br><br><br><br>
  <br><br><br><br><br>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>


<?php
include("footer.php");
?>