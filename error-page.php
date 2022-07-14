<?php 
    $baseUrl = "https://" . $_SERVER["HTTP_HOST"];
    $pieces = explode("/", $_SERVER["REQUEST_URI"]);
    $projectName = $pieces[1];
    unset($pieces[0], $pieces[1]);
    $gibberish = implode("/", $pieces);    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404</title>
    <?php 
        echo "<link rel='stylesheet' href='$baseUrl/$projectName/css/style.css'>";
    ?>
</head>

<body>
    <h1>Error 404</h1>
    <?php
    echo "<img src='$baseUrl/$projectName/img/pexels-craig-adderley-1518754.jpg' alt='Oops'>";
    echo "<p>I am sorry, but we don't have <strong>$gibberish</strong>";
    echo "<a href='$baseUrl/$projectName/'>Back to Homepage</a>";
    ?>
</body>

</html>