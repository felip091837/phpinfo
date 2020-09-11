<!DOCTYPE html>
<html>
    <head>
        <title>Load Balance Test</title>
        <style type="text/css">
            * {
                font-size: 130%;
                background-color: rgb(84, 84, 84);
                text-align: center;
                color: rgb(113, 241, 70);
            }

            p {
                margin: 0;
                position: absolute;
                top: 30%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
        </style>
    </head>
    <body>
        <p>
                $IP = file_get_contents("http://icanhazip.com");
                echo "IP: " . $IP;
                echo "<br>";
                echo "Hostname: " . gethostname();
            ?>
        </p>
    </body>
</html>
