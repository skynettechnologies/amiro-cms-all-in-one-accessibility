<?php
$baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");
$baseUrl .= "://{$_SERVER['HTTP_HOST']}";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <iframe src="<?= $baseUrl ?>/_local/plugins_distr/all_in_one_accessibility/templates/aioa.php" style=" width: 100%; min-height: 800px;" frameborder="0"></iframe>
</body>

</html>