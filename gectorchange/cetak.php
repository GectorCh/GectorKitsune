<?php 
    include "headercetak.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <style>

</style>
    <body>    
    <h3 style="background-color:rgb(255, 255, 255);">LogBook Feeding</h3>
            <table class="table table-striped">
                <thead style="text-align:center;">
                    <tr>
                        <th>Nama</th>
                        
                        <th>Nama Produk</th>
                        <th>Tanggal Laporan</th>
                        <th>Batch</th>
                        <th>Volume</th>
                        <th>Posisi</th>
                        <th>Keterangan</th>
                        <th>Shift</th>
                    </tr>
                </thead>
                <tbody style="text-align:center;">
                    <?php 
                    include "koneksi.php";
                    $qry_lgbook=mysqli_query($conn,"select * from lgbook");
                    $no=0;
                    while($dt_lgbook=mysqli_fetch_array($qry_lgbook)){
                        $no++;
                        ?>
                        <tr>              
                            <td><?=$dt_lgbook['nama_usernya']?></td>
                            <td><?=$dt_lgbook['nama_produk']?></td>
                            <td><?=$dt_lgbook['tlaporan']?></td>
                            <td><?=$dt_lgbook['batch']?></td>
                            <td><?=$dt_lgbook['volume']?></td>
                            <td><?=$dt_lgbook['posisi']?></td>
                            <td><?=$dt_lgbook['keterangan']?></td>
                            <td><?=$dt_lgbook['shifts']?></td>
                        </tr>
                        <?php 
                    }
                    ?>
                </tbody>
            </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script>window.print()</script>
    </body>
</html>