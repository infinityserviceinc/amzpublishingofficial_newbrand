<!DOCTYPE html>
<html lang="en">

<?php include_once("includes/head.php")?>



<body>

<section class="about__home_intro position-relative">
<button onclick="window.history.back();" class="btn btn-primary position-absolute" style="top:20px;right:25px">X</button>
<div class="about__intro_text">
<h3>AMZ Publishing Official</h3>
</div>
<div class="container">
<div class="row align-items-center justify-content-center">
<div class="col-md-4 position-relative">
<img src="assets/img/transparent.svg" data-imgurl="assets/img/logo.png" alt="amzpublishingofficial" style="right: 0;left: 0;max-width: 180px;margin: 0 auto;bottom: inherit;top: -32px;">
</div>
</div>
<div class="row align-items-center vh-100" style="margin-top: 70px;">
<div class="col-md-7 mx-auto">
<h2>We Would Like To Hear From You
</h2>
<form action="/leads/" method="POST">     
  <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI']; ?>">
                            <input type="hidden" name="brand" value="amzpublishingofficial">
                            <input type="hidden" name="token" value="<?= $token;?>">
                            <input type="hidden" name="tag" value="banner form">
                            <input type="hidden" name="price" value="null">
                            <input type="hidden" name="news" value="1">

<div class="row">
<div class="col">
<input type="text" class="form-control" placeholder="Full Name" name="name" required />
</div>
<div class="col">
<input type="email" class="form-control" placeholder="E-mail Address" name="email" required />
</div>
</div>
<div class="row mt-3">
<div class="col">
<input type="tel" class="form-control" placeholder="Phone Number" name="phone" required />
</div>
</div>
<div class="row mt-3">
<div class="col">
<textarea name="brief" class="form-control" placeholder="Additional Comments "></textarea>
</div>
</div>
<div class="row mt-3">
<div class="col align-items-center justify-content-center d-flex">
<input type="submit" value="Send" class="btn btn-primary col-md-4 mx-auto">
</div>
</div>
</form>
</div>
</div>
</div>
</section>

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/fancybox.js"></script>
<script src="assets/js/fontawesome.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/app.js"></script>
</body>

</html>