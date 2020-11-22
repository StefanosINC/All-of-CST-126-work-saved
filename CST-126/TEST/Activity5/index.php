<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Make HTTP Request Example</title>
</head>
<body>
    <!-- Activity 5, March 30, 2020
    <!-- NOTE: HTTP GET will display your data in the browser address bar. 
	<!-- Click a link below and see for yourself -->
    <!-- NOTE: Always justify using an HTTP GET versus an HTTP POST to send data to server. 
	<!-- In general ALWAYS use a POST -->
    <H1>3/30/2020, Make an HTTP Get Request to a PHP Script</H1>

    <!-- Simple Anchor Tags with hard coded HTTP Parameters -->
    <a href="getRequest.php?id=0&mode=1">Link 1</a>
    <br/>
    <a href="getRequest.php?id=1&mode=2">Link 2</a>
    <br/>

    <!-- Simple Anchor Tags with dynamic HTTP Parameter value set from PHP variable -->
    <?php $id=10; ?>
    <a href="getRequest.php?id=<?= $id ?>&mode=2">Link 3</a>
    <br/>

    <!-- Simple Anchor Tags with dynamic HTTP Parameter value set in a for loop with a PHP variable -->
    <?php
    for($x=10;$x < 12;$x++)
    {
    ?>
        <br/>
        <a href="getRequest.php?id=<?= $x ?>&mode=2">Link <?= $x ?></a>
    <?php
    }
    ?>
</body>
</html>