<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My test site</title>
</head>
<body>
    <?php
        include('top-cache.php');
        include('list.php');
        echo('test'); // this was used as a test;
        include('bottom-cache.php');
    ?>
    
</body>
</html>