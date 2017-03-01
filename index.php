<html>
<head>
    <title></title>
</head>
<?php require_once("menu.php"); ?>
<body>
<?php require_once($_GET["arquivo"]); ?>
<?php $x = 1;
$y = 2;
if ($y > $x) {
    echo $x;
} ?>
</body>
</html>