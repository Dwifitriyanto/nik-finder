<?php
include "connection.php";
if (isset($_POST['provinces'])) {
    $provinces = $_POST["provinces"];
    echo "<option value=''>Select Regency</option>";

    $sql = "SELECT * FROM regencies WHERE province_id=$provinces";
    $hasil = mysqli_query($con, $sql);
    $no = 0;
    while ($data = mysqli_fetch_array($hasil)) {
?>
        <option value="<?php echo $data['regency_id']; ?>">
            <?php
            echo $data['name'];
            ?>
        </option>
    <?php
    }
}

if (isset($_POST['regencies'])) {
    $regencies = $_POST["regencies"];
    echo "<option value=''>Select District</option>";

    $sql = "SELECT * FROM districts WHERE regency_id=$regencies";
    $hasil = mysqli_query($con, $sql);
    $no = 0;
    while ($data = mysqli_fetch_array($hasil)) {
    ?>
        <option value="<?php echo $data['district_id']; ?>">
            <?php
            echo $data['name'];
            ?>
        </option>
<?php
    }
}
?>