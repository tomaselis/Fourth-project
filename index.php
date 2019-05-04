
<?php

$time = date('s');
$timer = 59 - $time;
$explosion = $timer < 1;
$size = 100;


?>


<html>
<head>
    <meta charset="UTF-8">
    <title>TICKING CLOCK </title>
    <meta http-equiv="refresh" content="1" >
    <style>
        section {
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            justify-content: flex-start;
            align-items: center;
        }
        .bomb {
            /*border: black solid 2px;*/
            background-image: url("photos/bomb.png");
            background-size: cover;
            background-repeat: no-repeat;
            width: <?php print $size += ($time * 2);?>px;
            height: <?php print $size += ($time * 2);?>px;
        }

        .action-1 {
            background-image: url("photos/explosion.png");
            width: 320px;
            height: 320px;
        }
    </style>
</head>
<body>
<section>
    <div class="bomb action-<?php print $explosion?>"></div>
    <h1><?php print $timer; ?></h1>
</section>
</body>
</html>

