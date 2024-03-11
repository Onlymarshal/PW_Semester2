<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <form method="post" action="hasil_tugas.php" class="w-50 mt-5 mx-auto p-4" style="border: solid black 2px; background-color: ivory; box-shadow: orange 2px 2px 2px; height: 650px;">
        <h2 style="margin-left: 250px; text-shadow: orange 2px 1px 1px;">Belanja Online</h2>
        <hr>
        <div style="display:flex; margin-top: 40px;">
            <div class="container px-3">
                <div class="form-group row">
                    <label for="custname" class="col-4 col-form-label"><b>Customer</b> <span style="padding-left: 92px;"><b>:</b></span></label>
                    <div class="col-6">
                        <input name="custname" id="custname" placeholder="Masukan nama" type="text" class="form-control" required style="border-color: orange; background-color: whitesmoke; box-shadow: orange 2px 2px 2px inset;">
                    </div>
                </div>
                <div class="form-group row" style="margin-top: 20px;">
                    <label class="col-4"><b>Pilih produk</b> <span style="padding-left: 73px;"><b>:</b></span></label>
                    <div class="col-8">
                        <div class="custo''m-control custom-radio custom-control-inline">
                            <input value="Tv" name="produk" id="Tv" type="radio" class="custom-control-input" required>
                            <label for="Tv" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input value="Kulkas" name="produk" id="Kulkas" type="radio" class="custom-control-input" required>
                            <label for="Kulkas" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input value="Mesin Cuci" name="produk" id="Mesin Cuci" type="radio" class="custom-control-input" required>
                            <label for="Mesin Cuci" class="custom-control-label">Mesin cuci</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="margin-top: 20px;">
                    <label for="jumlah" class="col-4 col-form-label"><b>Jumlah</b> <span style="padding-left: 110px;"><b>:</b></span></label>
                    <div class="col-6">
                        <input name="jumlah" id="jumlah" placeholder="Jumlah beli" type="number" min=0 class="form-control" required style="border-color: orange; background-color: whitesmoke; box-shadow: orange 2px 2px 2px inset;">
                    </div>
                </div>
                    <div>
                        <input name="submit" type="submit" name="submit" value="Submit"
                         style="margin: 30px; width: 80px; height: 35px; border-radius: 8px; margin-left: 236px; background-color: whitesmoke; box-shadow: orange 2px 2px 2px; border-color: orange;">
                    </div>
                    <hr>
                    <div>
                        <p style="color: red;"><i>List Harga</i></p>
                        <ol style="list-style: none;">
                            <li><b>Kulkas</b> <span style="padding-left: 46px;">:</span><b style="padding-left: 18px;"><del style="color: black;"><span style="color: red;">3.500.000</span></del><span style="padding-left: 5px; color: red;">3.100.000</span></b><span style="font-size: small; padding-left: 3px;">11%</span></li>
                            <li><b>TV</b> <span style="padding-left: 74px;">:</span><b style="padding-left: 18px; color: red;">4.200.000</b></li>
                            <li><b>Mesin Cuci</b> <span style="padding-left: 14px;">:</span><b style="padding-left: 18px; color: red;">2.800.000</b></li>
                        </ol>
                    </div>
                    <h5 style="margin: 55px; padding-left: 430px; text-shadow: orange 2px 1px 1px;">Marshall Shop.</h5>
                </div>
            </div>
        </div>
        
    </form>
</body>

</html>