<?PHP include 'inc/header.php'; ?>
<?PHP include 'nav.php'; ?>


<h2>Login Page</h2>

<div class="container">
<form action="handlers/handlelogin.php" method="post">
<?php
    if(isset($_SESSION['loginerrors'])):
        foreach($_SESSION['loginerrors'] as $error): ?>
                <div class="alert alert-danger mt-2">
                    <?php echo $error; ?>
                </div>
            <?php
        endforeach;
        unset($_SESSION['loginerrors']);
      endif;  
            ?>
  <div class="mb-3 ">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3 ">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3 form-check">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?PHP include 'inc/footer.php'; ?>
