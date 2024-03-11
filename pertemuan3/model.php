
<?php 

   function kelulusan($nilai_akhir)
   {
      if($nilai_akhir > 55)
      {
        return 'Lulus';
      }
      elseif($nilai_akhir < 55)
      {
        return 'Tidak Lulus';
      }
      else
      {
        return 'Tidak Valid';
      }
   }

   function grade($nilai_akhir)
   {
    if ($nilai_akhir <= 35) {
        return 'E';
    } elseif($nilai_akhir <= 55) {
        return 'D';
    } elseif($nilai_akhir <= 74) {
        return 'C';
    } elseif($nilai_akhir <= 89) {
        return 'B';
    } elseif($nilai_akhir <= 100) {
        return 'A';
    }else{
        return 'TIDAK VALID';
    }
   }
   
?>
