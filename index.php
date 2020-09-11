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
            <?php
                function Uptime() {
                    $ut = strtok(exec("cat /proc/uptime"), ".");
                    $days = sprintf("%2d", $ut / (3600 * 24));
                    $hours = sprintf("%2d", ($ut % (3600 * 24)) / 3600);
                    $min = sprintf("%2d", (($ut % (3600 * 24)) % 3600) / 60);
                    $sec = sprintf("%2d", (($ut % (3600 * 24)) % 3600) % 60);
                    return '[$days, $hours, $min, $sec]';
                }

                $IP = file_get_contents("http://icanhazip.com");
                echo "IP: " . $IP;
                echo "<br>";
                echo "Hostname: " . gethostname();

                echo "<br>";
                $ut = Uptime();
                echo "Uptime: $ut[0]:$ut[1]:$ut[2]:$ut[3]";
            ?>
        </p>
    </body>
</html>
