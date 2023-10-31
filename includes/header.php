<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>


</head>

<body>
    
    <header>
        <h1><i class="logo fa <?=$logo?>"<?=$logo_color?>></i>LaMonte Golden's IT 162 Portal</a>
        </h1>
       
        <nav>
            <ul class="topnav" id="myTopnav">
                <?=makeLinks($nav1)?>
                <!-- START COMMENT OUT NAV
                <li><a href="index.php" class="selected">Welcome</a></li>
                <li><a href="big/index.php">Big</a></li>
                <li><a href="aia.php">AIA</a></li>
                <li><a href="flowchart.php">Flowchart</a></li>
                <li><a href="fp/index.php">Final Project</a></li>
                <li><a href="contact.php">Contact LaMonte</a></li>
                END COMMENT OUT NAV -->
                <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
            </ul>
        </nav>
    </header>

    <div id="=wrapper">
<!--<h2 class="pageID"><?=$PageID?></h2> not sure what this is for-->
    <!--header ends here-->