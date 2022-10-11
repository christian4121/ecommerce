<?php
    include_once("core/function.php");
    $id=0;
    if($_GET['variable']){
        $id=$_GET['variable'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/font-awesome.css" media="all">
    <link rel="stylesheet" type="text/css" href="stylesheet/simple-line-icons.css" media="all">
    <link rel="stylesheet" type="text/css" href="stylesheet/revslider.css" >
    <link rel="stylesheet" type="text/css" href="stylesheet/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/jquery.mobile-menu.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="stylesheet/responsive.css" media="all">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Playfair+Display:400,400i,700,900|Rubik:300,400,400i,500,500i,700" rel="stylesheet">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
</head>
<body>
<?php
    drawheader($id);
?>
<?php
    drawfooter();
?>
</body>
</html>