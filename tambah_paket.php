<?php 
    include "header.php";
?>
<?php
    if($_SESSION['role']=='admin'){
?>
<!DOCTYPE html>
<html>  
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<style>
body {
  background-image: url('12.gif.gif');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<body>
    
    <h2>Tambah Paket</h2>
    <form action="proses_tambah_paket.php" method="post">
        Jenis Paket: 
        <?php 
        $arr_jenis=array('mixsida'=>'MIXSIDA','amegrass_80_wp'=>'Amegrass 80 WP','amegrass_500_sc'=>'Amegrass 500 SC','sidaron_80_wp'=>'Sidaron 80 WP','sidaron_500_sc'=>'Sidaron 500 SC','see_top_525_sl'=>'See Top 525 SL','amara_490_sl'=>'Amara 490 SL','brown_up_490_sl'=>'Brown Up 490 SL','meto_490_sl'=>'Meto 490 SL','nio_490_nl'=>'Nio 490 SL','sida_up_490_sl'=>'Sida Up 490 SL','sidafos_480_sl'=>'Sidafos 480 SL','bush_up_440_sl'=>'Bush Up 440 SL','pangkas_400_sl'=>'Pangkas 400 SL','away_250_sl'=>'Away 250 SL','galak_250_sl'=>'Galak 250 SL','laris_250_sl'=>'Laris 250 SL','safa_250_sl'=>'Safa 250 SL','sidalaris_240_sl'=>'Sidalaris 240 SL','dior_166_sl'=>'Dior 166 SL','sidatop_166_sl'=>'Sidatop 166 SL','voting_166_sl'=>'Voting 166 SL','sidastar_300/100_sl'=>'Sidastar 300/100 SL','lutop_250/125_sl'=>'Lutop 250/125 SL','bulma_400/150_sl'=>'Bulma 400/150 SL','obin_310/115_sl'=>'Obin 310/115 SL','bransida_360/10_sl'=>'Bransida 360/10 SL','glymetz_240/10_sl'=>'Glymetz 240/10 SL','damin_875_sl'=>'Damin 875 SL','sidamin_865_sl'=>'Sidamin 865 SL','minda_720_sl'=>'Minda 720 SL','medally_20_wg'=>'Medally 20 WG','zeram_250_ec'=>'Zeram 250 EC','sidaxone_276_sl'=>'Sidaxone 276 SL','liuxone_150_sl'=>'Liuxone 150 SL','starjos_125_ew'=>'Starjos 125 EW','jotos_490_ec'=>'Jotos 490 EC','thiosida_6_gr'=>'Thiosida 6 GR','gisentro_560_sc'=>'Gisentro 560 SC','prassida_125_sc'=>'Prassida 125 SC','puddako_210_sl'=>'Puddako 210 SL','sidasoft_25_wp'=>'Sidasoft 25 WP','zig-zag_166_sl'=>'Zig-zag 166 SL');
        ?>
        <select name="jenis" class="form-control">
            <option></option>
            <?php foreach ($arr_jenis as $key_jenis => $val_jenis):
                if($key_jenis==$dt_paket['jenis']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
            <option value="<?=$key_jenis?>" <?=$selek?>><?=$val_jenis?></option>
            <?php endforeach ?>
        </select>
        Harga:
        <input type="number" name="harga" value= "" class="form-control">
        <input type="submit" name="simpan" value="Tambah Paket" class="btn btn-primary">
    </form>
    
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    }
?>
