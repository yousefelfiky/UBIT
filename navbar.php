<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="images/UBIT.png" width="100" height="100" alt="logo" class="d-inline-block align-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li>
        <li>
        <li></li>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-center" aria-current="page" href="project.php"><button type="button" class="projectbtn btn-outline-secondary">start a project</button></a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto text-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
        </li>
        <?php
        if (isset($_SESSION['id'])) {
          echo '<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">logout</a>
        </li>';
        } else {
          echo '<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="signin.php">Sign In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="signup.php">Sign Up</a>
        </li>';
        }
        ?>
      </ul>
    </div>
  </div>
</nav>