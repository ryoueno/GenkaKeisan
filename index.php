<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>食品原価計算機</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/mainbody.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
<!-- 汎用ファイル読み込み -->
<?php require_once('common/common.php');?>
<?php require_once('common/get_item.php');?>

<?php require_once('header.php');?>
<div class="container">
    <?php require_once('mainbody.php');?>
    <?php require_once('sidebar.php');?>
</div>
<?php require_once('footer.php');?>
</body>
</html>