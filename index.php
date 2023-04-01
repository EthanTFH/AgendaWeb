<?php
    $indexPath = $_SERVER["SCRIPT_FILENAME"];
    $currentDirectory = explode("index",$indexPath)[0];

    $configRaw = file_get_contents($currentDirectory . "\\data\\configuration.conf");
    $config = json_decode($configRaw,true);
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            echo "<title>" . $config["Name"] . "</title>";
        ?>
        <link rel="stylesheet" href="css/lght.css">
        <link rel="icon" href="icons/tp256.png">
    </head>
    <body>
        <div id="sidebar">
            <a href="#"><img id="iconIMG" src="icons/tlw256.png"/></a>
            <hr id="sidebarSplit">
            <a href="index.php"><img id="homeIMG" src="icons/thw256.png"/></a>
            <a href="about.php">About</a>
        </div>
        <div id="contentBackground">
            <div id="messageBox">
                <form action="index.php" method="post">
                    <input type="text" name="messageInputBox" id="messageInputBox" value="Message" />
                    <input type="submit" id="submitMessage" value="Send" />
                </form>
            </div>
            <div id="messageContainer">
                <p id="messageTitle">
                    Hello
                </p>
                <hr id="msgInternalSeperator">
                <p id="messageBody">
                    Hello.
                </p>
                <hr id="msgInternalSeperator2">
                <div id="msgControls">
                    <a href="#" id="likeButton"><img src="icons/thw256.png" /></a>
                </div>
            </div>
        </div>
    </body>
</html>