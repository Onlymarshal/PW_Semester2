<h3 style="margin-left: 680px; margin-top: 250px;" >Rincian Pembelian</h3>
<div style="margin: auto; border: 2px solid black; width: 280px; height: 90px; padding-top: 15px; padding-left: 15px; color: red; background-color: ivory; box-shadow: 2px 2px 2px orange;">

    <?php
        if(isset($_POST['submit'])){

         $cst = $_POST['custname'];
         $prd = $_POST['produk'];
         $jml = $_POST['jumlah'];
         $btn = $_POST['submit'];

         switch ($prd){
            case "Tv";
            $total = $jml * 4200000;
            break;
            case "Kulkas";
            $total = $jml * 3100000;
            break;
            case "Mesin Cuci";
            $total = $jml * 2800000;
            break;
         }
         $total_format = number_format($total, 0, ',', '.');
        }  
    ?>


    <?php 
        if(isset($_POST['submit'])){
            
            echo '<span style="color: black;">Nama Pembeli</span> <span style="padding-left: 40px; color: black;">:</span> ' . $cst;
            echo '<br> <span style="color: black;">Barang yang dibeli</span> <span style="padding-left: 13px; color: black;">:</span> ' . $prd;
            echo '<br> <span style="color: black;">Jumlah Produk</span> <span style="padding-left: 38px; color: black;">:</span> ' . $jml;
            echo '<br> <span style="color: black;">Harga barang</span> <span style="padding-left: 48px; color: black;">:</span> ' . $total_format;
        }
    ?>

</div>
<div>
    <a href="Tugas_pratikum.php" style="text-decoration: none;"><h3 style="padding-left: 20px; border: 1px solid black; width: 160px; height: 30px; padding-top: 5px; margin: auto; margin-top: 30px; background-color: ivory; border-radius: 5px; box-shadow: 2px 2px 2px orange;">Tombol Kembali</h3></a>
</div>