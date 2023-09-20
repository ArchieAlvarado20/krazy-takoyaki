
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= esc(APP_NAME)?></title>
  
   <!-- Favicon -->
   <link href="assets/img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/all.min.css">
<link rel="stylesheet" href="assets/css/main.css">

<!-- Template Stylesheet -->
<link href="assets/css/style.css" rel="stylesheet">

<!-- sweet-alert -->
<link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">
</head>
<body>
<style>
    button #btn :hover{
        background-color: white;
    }
</style>
  <!-- Sign In Start -->
  <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <form method="post">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                          <div class="row-sm-12 d-flex">
                              <img src="assets/img/tako.png" alt="Logo" style="width: 50px; height: 50px;" class="col-sm-1">
                              <h3 class="text-primary col-sm-11 mt-2">Crazy Takoyaki</h3>
                          </div>
                            <h3>Sign In</h3>
                        </div>
                        <div class="form-floating mb-3">
                        <input value="<?=set_value('email')?>" autocomplete="on" &nbsp; type="email" name="email" id="floatingInput" value="" class="form-control <?=!empty($error['email']) ? 'border-danger' : '' ;?>" id="exampleFormControlInput1" placeholder="name@example.com" autofocus>
                                    <?php if(!empty($error['email'])):?><small class="text-danger"><?=$error['email']?></small><?php endif; ?>
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                        <input  type="password" name="password"  id="floatingPassword" class="form-control <?=!empty($error['password']) ? 'border-danger' : '' ;?>" id="exampleFormControlInput1" placeholder="Password">
                                        <?php if(!empty($error['password'])):?><small class="text-danger"><?=$error['password']?></small><?php endif; ?>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
                            </div>
                            <a href="">Forgot Password</a>
                        </div>
                        <button type="submit" class="btn text-dark btn-primary py-3 w-100 mb-4" id="btn">Sign In</button>
                        <!-- <p class="text-center mb-0">Don't have an Account? <a href="">Sign Up</a></p> -->
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>