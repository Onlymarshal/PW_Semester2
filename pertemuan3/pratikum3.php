<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container" style="margin-top: 150px; border: solid brown 2px; width: 1100px; height: 360px; background: linear-gradient(beige,ivory); box-shadow: 3px 3px 2px orange;">
    <div class="row">
        <div class="col-md-12">
            <form action="hasil_nilai.php" method="post">
                <div class="form-group row" style=" margin-top: 25px; ">
                    <label for="nama" class="col-4 col-form-label"><b>Nama Lengkap</b> <span style="padding-left: 200px;"><b>:</b></span></label>
                    <div class="col-8">
                        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required style="border-color: red; box-shadow: 2px 2px 2px pink inset;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matakuliah" class="col-4 col-form-label"><b>Mata Kuliah</b> <span style="padding-left: 223px;"><b>:</b></span></label>
                    <div class="col-8">
                        <select id="matakuliah" name="matakuliah" class="custom-select" require style="border-color: red; box-shadow: 2px 2px 2px pink inset;">
                            <option value="">Pilih Mata Kuliah</option>
                            <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                            <option value="Basis Data I">Basis Data I</option>
                            <option value="Pemrograman Web">Pemrograman Web</option>
                            <option value="Astronomi">Astronomi</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uts" class="col-4 col-form-label"><b>Nilai UTS</b> <span style="padding-left: 244px;"><b>:</b></span></label>
                    <div class="col-8">
                        <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control" required style="border-color: red; box-shadow: 2px 2px 2px pink inset;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uas" class="col-4 col-form-label"><b>Nilai UAS</b> <span style="padding-left: 242px;"><b>:</b></span></label>
                    <div class="col-8">
                        <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control" required style="border-color: red; box-shadow: 2px 2px 2px pink inset;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tugas" class="col-4 col-form-label"><b>Nilai Tugas</b> <span style="padding-left: 231px;"><b>:</b></span></label>
                    <div class="col-8">
                        <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="text" class="form-control" required style="border-color: red; box-shadow: 2px 2px 2px pink inset;">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button id="submit" name="submit" type="submit"  style="border: solid deeppink 1px; box-shadow: 2px 2px 2px pink; width: 100px; height: 35px; background-color: white; border-radius: 10px;">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>