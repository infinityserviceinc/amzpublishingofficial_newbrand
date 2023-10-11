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
<base href="<?= $requesMet.'://'.$_SERVER['HTTP_HOST'].'/' ?>">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Ghostwriting, Publishing, and Editing Services - AMZ Publishing Official</title>
    <meta charset="UTF-8">
    <meta name="description"
        content="AMZ Publishing Official elevates your book with our comprehensive services. Expert ghostwriting, professional publishing, and meticulous editing.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="index.html" />
    <link rel="shortcut icon" href="favicon.png" />
    <link href="css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="css/aos.css" rel="stylesheet" type="text/css">
    <link href="css/fancybox.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link href="css/swiper-bundle.min.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
</head>