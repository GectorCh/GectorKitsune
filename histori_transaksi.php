<?php 
    include "header.php";
?>
<?php
    if($_SESSION['role'] == 'admin'){
       
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
    <h2>Histori Transaksi</h2>
        <table class="table table-hover">
            <thead style="text-align:center;">
                <th>NO</th>
                <th>Nama user</th>
                <th>Tanggal proses</th>
           
                <th>Tanggal Bayar</th>
                <th>Status</th>
                <th>Mulai</th>
                <!-- <th>FUN</th> -->
                
                <th colspan="3">Aksi</th>
            </thead>
            <tbody style="text-align:center;">
                <?php 
                    include "koneksi.php";
                    $qry_histori=mysqli_query($conn,"select *,transaksi.id_transaksi AS id_transaksi from transaksi join member on transaksi.id_member = member.id_member order by transaksi.id_transaksi desc");
                    $no=0;
                    while($dt_histori=mysqli_fetch_array($qry_histori)){
                        $qry_detail=mysqli_query($conn, "select * from detail_transaksi join paket on paket.id_paket=detail_transaksi.id_paket where detail_transaksi.id_transaksi = ".$dt_histori['id_transaksi']);
                        $total=0;
                        while($dt_detail=mysqli_fetch_array($qry_detail)){
                            $total+=$dt_detail['qty']*$dt_detail['harga'];
                        }

                        $no++;
                       
                        $button_proses="<a href='update_merek.php?id=".$dt_histori['id_merek']."' class='btn btn-primary' onclick='return confirm(\"Apakah anda yakin?\")'>Proses</a>";
                        $button_selesai="<a href='update_merek.php?id=".$dt_histori['id_merek']."' class='btn btn-primary' onclick='return confirm(\"Apakah anda yakin?\")'>Selesai</a>";
                       
                        $button_cetak="<a href='cetak.php?id=".$dt_histori['id_merek']."' class='btn btn-warning'>Cetak</a>";
                    ?>
                    
                <tr>
                <a style="margin-left:10px;" 
                    href="hapus_history.php?id=<?=$dt_histori['id_merek']?>" 
                    onclick="return confirm('Apakah anda yakin menghapus data ini?')" 
                    class="btn btn-danger">Hapus</a>

                    <td><?=$no?></td>
                    <td><?=$dt_histori['nama_merek']?></td>
                    <td><?=$dt_histori['jenis_merek']?></td>
                    <td><?=$dt_histori['user_shift']?></td>
                    <td><?=$total?></td>
                    <td><?=$dt_histori['status']?></td>
                    

                    <?php if($dt_histori['status']=='proses'){ ?>
                            <td><?=$button_selesai?></td>
                    <?php        
                        }
                    ?>
                    <?php if($dt_histori['status']=='selesai'){ ?>
                            <td><?=$button_diambil?></td>
                    <?php        
                        }
                    ?>
                    <td><?=$button_cetak?></td>

                   
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>
<?php
    }
?>
<?php
    if($_SESSION['role'] == 'karyawan'){
       
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
    <h2>Histori Transaksi</h2>
        <table class="table table-hover">
            <thead style="text-align:center;">
                <th>NO</th>
                <th>Nama Merek</th>
                <th>Tanggal Operasional</th>

                <th>Status</th>
>
                <!-- <th>FUN</th> -->
                
                <th colspan="3">Aksi</th>
            </thead>
            <tbody style="text-align:center;">
                <?php 
                    include "koneksi.php";
                    $qry_histori=mysqli_query($conn,"select *,transaksi.id_transaksi AS id_transaksi from transaksi join user on transaksi.id_user = user.id_user order by transaksi.id_transaksi desc");
                    $no=0;
                    while($dt_histori=mysqli_fetch_array($qry_histori)){
                        $qry_detail=mysqli_query($conn, "select * from detail_transaksi join merek on merek.id_merek=detail_transaksi.id_merek where detail_transaksi.id_transaksi = ".$dt_histori['id_transaksi']);
                        $total=0;
                        
                        }

                        $no++;
                        $button_lunas="<a href='lunas.php?id=".$dt_histori['id_merek']."' class='btn btn-success' onclick='return confirm(\"Apakah anda yakin?\")'>Lunas</a>";
                        $button_proses="<a href='update_transaksi.php?id=".$dt_histori['id_merek']."' class='btn btn-primary' onclick='return confirm(\"Apakah anda yakin?\")'>Proses</a>";
                        $button_selesai="<a href='update_transaksi.php?id=".$dt_histori['id_merek']."' class='btn btn-primary' onclick='return confirm(\"Apakah anda yakin?\")'>Selesai</a>";
                        $button_diambil="<a href='update_transaksi.php?id=".$dt_histori['id_merek']."' class='btn btn-primary' onclick='return confirm(\"Apakah anda yakin?\")'>Diambil</a>";
                        $button_cetak="<a href='cetak.php?id=".$dt_histori['id_merek']."' class='btn btn-warning'>Cetak</a>";
                    ?>
                    
                <tr>
                

                <td><?=$no?></td>
                    <td><?=$dt_histori['nama_merek']?></td>
                    <td><?=$dt_histori['jenis_merek']?></td>
                    <td><?=$dt_histori['user_shift']?></td>
                    <td><?=$total?></td>
                    <td><?=$dt_histori['status']?></td>
                    

                    <?php if($dt_histori['status']=='proses'){ ?>
                            <td><?=$button_selesai?></td>
                    <?php        
                        }
                    ?>
                    <?php if($dt_histori['status']=='selesai'){ ?>
                            <td><?=$button_diambil?></td>
                    <?php        
                        }
                    ?>
                    <td><?=$button_cetak?></td>

                   
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>
<?php
    
