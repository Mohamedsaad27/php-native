
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PHP Native</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <?php
          if(!isset($_SESSION['auth'])):        
        ?>
        <li class="nav-item">
          <a class="nav-link active" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="register.php">Register</a>
        </li>
        <?php else: ?>
        <li class="nav-item">
          <a class="nav-link active" href="profile.php">Profile</a>
        </li>
        <?php endif; ?>
      </ul>

      <ul class="navbar-nav mr mb-2 mb-lg-0"> 
     <?php
          if(isset($_SESSION['auth'])):        
        ?>
      <li class="nav-item">
      <a type="submit" class="btn btn-primary " href="logout.php">Log out</a>
        </li>
        <?php endif; ?>  
      </ul> 
    </div>
  </div>
</nav>



  
 