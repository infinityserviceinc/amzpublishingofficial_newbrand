<?php 
include_once("token.php");
include_once("ppc_or_seo.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_SERVER['HTTPS'])) {
	$requesMet = "https";
}else{
	$requesMet = "http";
}
?>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta name="robots" content="index, follow">
    <base href="<?= $requesMet.'://'.$_SERVER['HTTP_HOST'].'/' ?>">
    <link rel="alternet" href="<?= $requesMet.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>" hreflang="en-us">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="<?=$requesMet.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>">
    <link rel="shortcut icon" href="favicon.ico" />
    <link href="css/all.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    
    <link href="css/aos.css" rel="stylesheet" type="text/css">
    <link href="css/fancybox.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link href="css/swiper-bundle.min.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <link rel="canonical" href="<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
    <link rel="alternate" href="<?= $requesMet.'://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'] ?>"
        hreflang="en-US">
    <link rel="alternate" href="<?= $requesMet.'://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'] ?>"
        hreflang="x-default">
    <!-- Google Tag Manager -->
   
    <!-- End Google Tag Manager -->
</head>