<?PHP include 'inc/header.php'; ?>
<?PHP include 'nav.php'; ?>

<h2>Register Page</h2>
<div class="container mt-5">
    <div class="row">
    <form action="handlers/handleregister.php" method="post" class="border p-3">        
    <?php
    if(isset($_SESSION['errors'])):
        foreach($_SESSION['errors'] as $error): ?>
                <div class="alert alert-danger">
                    <?php echo $error; ?>
                </div>
            <?php
        endforeach;
        unset($_SESSION['errors']);
    endif;  
            ?>    
    <div class="form-group p-2 my-1 ">
        <label for="name" >Name</label>
        <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group p-2 my-1">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group p-2 my-1">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group p-2 my-1">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
     
</form>
    </div>
</div>

<?PHP include 'inc/footer.php'; ?>
