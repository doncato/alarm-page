<?php
    $speed = $_POST["speed"];
    if ($msg == "") {
        $speed = $_GET["speed"];
        if ($speed == "") {
            $speed = "3000";
        }
    }
    $head = $_POST["header"];
    if ($msg == "") {
        $head = $_GET["header"];
        if ($head == "") {
            $head = "DANGER!";
        }
    }
    $msg = $_POST["message"];
    if ($msg == "") {
        $msg = $_GET["message"];
        if ($msg == "") {
            $msg = "ALERT!";
        }
    }
    $footer = $_POST["footer"];
    if ($footer == "") {
        $footer = $_GET["footer"];
        if ($footer == "") {
            $footer = "ERROR!";
        }
    }
    $no_slider = $_POST["no_slider"];
    if ($no_slider == "") {
        $no_slider = $_GET["no_slider"];
        if ($no_slider == "") {
            $no_slider = False;
        }
    if ($no_slider != False) {
        $no_slider = True;
    }
    }
    if ($head == "none") {
        $head = "";
    }
    if ($msg == "none") {
        $msg = "";
    }
    if ($footer == "none") {
        $footer = "";
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/">
    <head>
        <title><?php echo $head?></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="https://github.com/doncato/alarm-page" />
        <meta name="description" content="Alert" />

        <link media="screen"/>

        <link rel="stylesheet" href="style.css">
    </head>
    <body style="animation-duration: <?php echo $speed."ms" ?>;">
        <div class="upper">
            <div class="head inverse_anim" style="animation-duration: <?php echo $speed."ms" ?>;">
                <div class="rotating_single_left">
                    <b>—</b>
                </div>
                <div class="header-text">
                    <?php echo $head ?>
                </div>
                <div class="rotating_single_right">
                    <b>—</b>
                </div>
            </div>
        </div>
        <div class="center">
            <div class="centered">
                <?php
                    echo $msg
                ?>
            </div>
        </div>
        <div class="lower">
            <div class="whitebox">
                <?php
                    echo $footer
                ?>
            </div>
            <div class="bottom">
                // 12.0545.2021::24 <?php echo date("d/m/Y") ?>
                <div class="footnote">
                    <a href="https://github.com/doncato/alarm-page/">
                        Nr. AF.E8.77.D5.32.B8.7B.AA || v. 0.1.0
                    </a>
                </div>
            </div>
        </div>
        <?php if ($no_slider == True) {echo ("<!--");} ?>
        <div class="sliding animation" style="animation-duration: <?php echo $speed."ms" ?>;"></div>
        <?php if ($no_slider == True) {echo ("-->");} ?>
    </body>
</html>
