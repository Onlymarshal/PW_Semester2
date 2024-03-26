<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratikum 5</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div>
        <p style="text-align: center; font-size: xx-large; text-shadow: 2px 2px 1px greenyellow; font-family: Georgia, serif; margin-top: 20px"><b>Ujian Test Matematika</b></p>
    </div>
    <p  style="text-align: center; margin-top: 130px;"><b>Masukkan hasil data ujian dibawah ini</b></p>
    <div class="container" style="margin-top: px; border: solid brown 2px; width: 1100px; height: 260px; background: linear-gradient(beige,ivory); box-shadow: 3px 3px 2px orange;">
    <div class="row">
        <div class="col-md-12">
            <form action="proses.php" method="post">
                <div class="form-group row" style=" margin-top: 25px; ">
                    <label for="nama" class="col-4 col-form-label"><b>Nama Lengkap</b> <span style="padding-left: 165px;"><b>:</b></span></label>
                    <div class="col-8">
                        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required style="border-color: red; box-shadow: 2px 2px 2px pink inset;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uts" class="col-4 col-form-label"><b>Umur</b> <span style="padding-left: 235px;"><b>:</b></span></label>
                    <div class="col-8">
                        <input id="umur" name="umur" placeholder="Umur" type="number" class="form-control" required style="border-color: red; box-shadow: 2px 2px 2px pink inset;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uas" class="col-4 col-form-label"><b>Nilai</b> <span style="padding-left: 242px;"><b>:</b></span></label>
                    <div class="col-8">
                        <input id="nilai" name="nilai" placeholder="Nilai" type="number" class="form-control" required style="border-color: red; box-shadow: 2px 2px 2px pink inset;">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button id="submit" name="submit" type="submit"  style="border: solid deeppink 1px; box-shadow: 2px 2px 2px pink; width: 100px; height: 35px; background-color: white; border-radius: 10px; border-color: red; box-shadow: 2px 2px 2px pink inset;">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>