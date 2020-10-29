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

                <form action="result.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" autocomplete="off" placeholder="Name" required>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md">
                                <label for="day">Day</label>
                                <select name="day" id="day" class="form-control" required>
                                    <option value="">Day</option>
                                    <option value="01">1</option>
                                    <option value="02">2</option>
                                    <option value="03">3</option>
                                    <option value="04">4</option>
                                    <option value="05">5</option>
                                    <option value="06">6</option>
                                    <option value="07">7</option>
                                    <option value="08">8</option>
                                    <option value="09">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                            </div>
                            <div class="col-md">
                                <label for="month">Month</label>
                                <select name="month" id="month" class="form-control" required>
                                    <option value="">Month</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                            <div class="col-md">
                                <label for="year">Year</label>
                                <select name="year" id="year" class="form-control" required>
                                    <option value="">Year</option>
                                    <?php
                                    for ($i = 45; $i <= 99; $i++) {
                                    ?>
                                        <option value="<?php echo $i; ?>">
                                            <?php
                                            echo 1900 + $i;
                                            ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    for ($i = 0; $i <= 20; $i++) {
                                    ?>
                                        <option value="<?php echo $i; ?>">
                                            <?php
                                            echo 2000 + $i;
                                            ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control" required>
                            <option value="">Select Gender</option>
                            <option value="0">Male</option>
                            <option value="40">Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="provinces">Province</label>
                        <select name="provinces" id="provinces" class="form-control" required>
                            <?php
                            include "connection.php";

                            echo "<option value=''>Select Province</option>";
                            $sql = "SELECT * FROM provinces";
                            $hasil = mysqli_query($con, $sql);
                            while ($data = mysqli_fetch_array($hasil)) {
                            ?>
                                <option value="<?php echo $data["province_id"]; ?>">
                                    <?php
                                    echo $data['name'];
                                    ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="regencies">Regency</label>
                        <select name="regencies" id="regencies" class="form-control" required>
                            <option value="">Select Regency</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="districts">District</label>
                        <select name="districts" id="districts" class="form-control" required>
                            <option value="">Select District</option>
                        </select>
                    </div>

                    <div class="row justify-content-md-center">
                        <div class="col-md"></div>
                        <div class="col-md"></div>
                        <div class="col-md">
                            <div class="form-group">
                                <button class="btn btn-outline-dark float-right">Process</button>
                            </div>
                        </div>
                    </div>
                </form>

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