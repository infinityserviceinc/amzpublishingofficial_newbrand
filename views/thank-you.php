<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("includes/head.php")?>
</head>

<style>
    .first-color{
        color: #fff;
    }
</style>
<body>
    
    <?php include('includes/header.php');?>
    <section class="section1 d-flex h-100vh" style="height: inherit;background: #beae65;">
        <div class="container align-self-center">
            <div class="row">
                <div class="col-lg-12" style="margin-top: 70px;">
                    <!-- <h1 class="first-color font-80 font-weight-bold"> -->
                    <h1 class="first-color font-80 font-weight-bold"><?php if(isset($_REQUEST['thanksMsg'])){ echo $_REQUEST['thanksMsg'];} ?></h1>
                    <h1 class="first-color font-80 font-weight-bold"><?php if(isset($_REQUEST['successMsg'])){ echo $_REQUEST['successMsg'];} ?></h1>
                            
                    <!-- </h1> -->
                    
                </div>
            </div>
        </div>
    </section>

    <?php include('includes/footer.php');?>

</body>
</html>