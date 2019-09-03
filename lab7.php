<!doctype html>
<html>

<head>
    <meta http-equiv="refresh" content="1" />
    <style>
        p {
            color: white;
            font-size: 90px;
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        body {
            background-color: black;
        }
        span{
            color: white;
            font-size: 20px;
            position: absolute;
            top: 65%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
    <p>
        <?php
            date_default_timezone_set('Asia/Kolkata');
            echo date(" h: i : s A");
        ?>
    </p>
    <span>made with <b style="color:red;">&hearts;</b> by Sujith D</span>
</head>

</html>