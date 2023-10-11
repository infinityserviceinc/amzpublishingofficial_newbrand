<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/head.php');?>

    <title>Thank you</title>
</head>

<body>

    <?php include('includes/header.php');?>
    <section class="section1 h-100vh" style="height: inherit;background: url(images/main-banner-bg.jpg)">
        <div class="ast-container align-self-center">
            <div class="row">
                <div class="col-lg-12" style="margin: 291px 0;">
                    <!-- <h1 class="  font-weight-bold"> -->
                    <h1 class=" text-dark  font-weight-bold text-center" style="text-align:center">
                        <?php if(isset($_REQUEST['thanksMsg'])){ echo $_REQUEST['thanksMsg'];} ?></h1>
                    <h1 class=" text-dark  font-weight-bold text-center" style="text-align:center">
                        <?php if(isset($_REQUEST['successMsg'])){ echo $_REQUEST['successMsg'];} ?></h1>
                    <!-- </h1> -->
                    <ul class="theme-btn-ul justify-content-center mt-5">
                        <li>
                            <a class="theme-btn theme-btn-featured" style="cursor: pointer;" onclick="history.back()">Go Back</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php include('includes/footer.php');?>

</body>

</html>