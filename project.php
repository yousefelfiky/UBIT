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
  <!-- Bootstrap CSS -->
  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="styles.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-HwGKtJLznb+WhViOox1E5ghvyHtfAB1fXGdEJflP7VThP/yLl/R7Vr1QrZl7VJ62Df1vX/mE/OJvj+JVmsNwWw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-HwGKtJLznb+WhViOox1E5ghvyHtfAB1fXGdEJflP7VThP/yLl/R7Vr1QrZl7VJ62Df1vX/mE/OJvj+JVmsNwWw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      #my-container {
        display: none;
      }
    </style>
  </head>

<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operational = $_POST["operational"];
    $industry = $_POST["industry"];
    $bname = $_POST["bname"];
    $bsize = $_POST["bsize"];

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $userid = $row["id"];
    }

    $sql = "INSERT INTO business (operational, industry, bname, bsize) 
          VALUES ('$operational','$industry','$bname','$bsize',)";

    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
  }
  ?>

  <style>
    #my-container {
      display: none;
    }
  </style>

  <div class="container">
    <h1 id="my-container" class="text-center my-5 sky">Transforming your vision into reality</h1>

    <script>
      $(document).ready(function() {
        $('#my-container').slideDown(1500);
      });
    </script>

    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="project.php" method="POST">

          <b>Are you currently running a business or planning to start one?</b>
          <br>
          <input type="radio" id="running" name="operational" value="running">
          <label for="running">Yes, I'm currently running a business.</label>
          <br>

          <input type="radio" id="planning" name="operational" value="planning">
          <label for="planning">No, but I'm planning to start one.</label><br>
          <br>

          <b>What's Your Business Industry?</b>
          <input class="form-control" required type="text"></input><br>
          <b>What's Your Business Name?</b>
          <input class="form-control" type="text"></input><br>
          <b>What's Your Organizational Size?</b>
          <p>(optional)</p>
          <input class="form-control" required type="text"></input><br>
          <b>List Some Of The Areas Your Business Needs Help With</b>
          <input class="form-control" required type="text"></input><br>

          <br>
          <button type="submit" class="btncustom btn-primary">Done</button><br><br><br><br><br>
        </form>

      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-/dXN8Xv9TZoaw4vxrY7Yq1wA0jcZedL3q83M5a2jB6Dg4sV98EY4QPhOTTa4W6U6" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha512-FQK4DYrmI4zQ4s/kKj7D6F42d6UE0XyTjK6b/FU6Y/veuJ7ZD/1MzG/vV/BOc8uN7St2PRGnN+7VYzbqm8JwqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>

<?php
include("footer.php");
?>