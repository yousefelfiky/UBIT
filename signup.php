<?php
include("const.php");
include("connect.php");
include("navbar.php");
include("footer.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="styles.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>

  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>

  <?php
  require_once("connect.php");
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
        header('location: signin.php');
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }
  }
  mysqli_close($conn);
  ?>


  <div class="container">
    <h1 class="text-center my-5">Sign up</h1>
    <div class="row justify-content-center">
      <div class="col-md-6">

        <form action="/signup" method="POST">
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
        <p class="text-center mt-3">Already have an account? <a href="/signin">Sign in</a></p>
        <p class="text-center mt-3">Already have an account? <a href="/signin">Sign in</a></p>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>