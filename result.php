<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIK Finder</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md"></div>
            <div class="col-md-5 bg-dark">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="index.php">NIK Finder</a>
                </nav>
            </div>
            <div class="col-md"></div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md"></div>
            <div class="col-md-5 bg-light">
                <?php
                $name = $_POST['name'];
                $day = (int)$_POST['day'] + (int)$_POST['gender'];
                $month = $_POST['month'];
                $year = (string)$_POST['year'];
                $district = $_POST['districts'];

                if ($day <= 10) {
                    $day = "0" . (string)$day;
                }

                if ($year <= 10) {
                    $year = "0" . $year;
                }

                echo "</br><p class=\"h4 text-center\">{$name}'s NIK is {$district}{$day}{$month}{$year}****</p>";
                ?>

                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="https://twitter.com/masred_" target="_blank">
                        <span class="text-muted h6">With <i class="fa fa-heart"></i> by Masred</span>
                    </a>
                </nav>
            </div>
            <div class="col-md"></div>
        </div>

        <script src="js/app.js"></script>
    </div>
</body>

</html>