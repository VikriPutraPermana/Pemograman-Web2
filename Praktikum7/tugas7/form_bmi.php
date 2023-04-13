<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
        <h2>Form Pasien BMI</h2>

        <form method="POST" action="form_bmi.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="umur" class="col-4 col-form-label">Umur</label>
                <div class="col-8">
                    <input id="umur" name="umur" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L">
                        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P">
                        <label for="jk_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="berat" class="col-4 col-form-label">Berat Badan</label>
                <div class="col-8">
                    <input id="berat" name="berat" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tinggi" class="col-4 col-form-label">Tinggi Badan</label>
                <div class="col-8">
                    <input id="tinggi" name="tinggi" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-danger">Submit</button>
                </div>
            </div>
        </form>
        <table class="table table-bordered">
            <tr class= "table-danger text-uppercase">
                <th>Nama</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
                <th>Hasil BMI</th>
                <th>Status BMI</th>
            </tr>
            <?php 
        // cek user udh klik submit
        if (isset($_POST["submit"])) {
            //tangkap data dari form
            $nama = $_POST["nama"];
            $umur = $_POST["umur"];
            $jk = $_POST["jk"];
            $berat_badan = $_POST["berat"];
            $tinggi = $_POST["tinggi"];

            // panggil class
            require_once "class_bmi.php";

            //  buat objek
            $pasien =  new bmiPasien($nama, $umur, $jk, $berat_badan, $tinggi);
        }
        ?>
            <tr>
                <td><?= $pasien->nama; ?></td>
                <td><?= $pasien->umur; ?></td>
                <td><?= $pasien->jk; ?></td>
                <td><?= $pasien->berat_badan; ?></td>
                <td><?= $pasien->tinggi; ?></td>
                <td><?= $pasien->HasilBMI(); ?></td>
                <td><?= $pasien->statusBMI(); ?></td>
            </tr>
        </table>
    </div>
</body>
</html>