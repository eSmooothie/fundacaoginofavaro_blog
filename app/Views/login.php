
<!DOCTYPE html>
<html class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Gallery of FGF</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/untitled.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body class="h-100">
    <section class="login-clean h-100">
        <form method="post" id="adminLogin" class="">
            <h2 class="visually-hidden">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="mb-3">
              <input id="password" class="form-control" type="password" name="password" placeholder="Password" aria-describedby="passwordValidationFeedback" required>
              <div id="passwordValidationFeedback" class="invalid-feedback">
                Invalid password.
              </div>
            </div>
            <div class="mb-3"><input class="btn btn-primary d-block w-100" type="submit" value="Log In"></div>
        </form>
    </section>
    <script src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script type="module" src="<?php echo base_url(); ?>/assets/js/admin_script.js" charset="utf-8"></script>
</body>

</html>
