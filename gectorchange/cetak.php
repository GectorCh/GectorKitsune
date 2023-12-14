<?php 
    include "headercetak.php";
?>
<!DOCTYPE html>
<html>
    <head>
       
    </head>
    <style>

</style>
    <body>    
    <h3 style="background-color:rgb(255, 255, 255);">LogBook Feeding</h3>
            <table class="table table-striped">
                <thead style="text-align:center;">
                    <tr>
                        <th>NO</th>
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
                            <td><?=$no?></td>
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
       
        <script>window.print()</script>
    </body>
</html>