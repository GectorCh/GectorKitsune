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
    <h3 style="background-color:rgb(255, 255, 255);">LogBook Packing</h3>
            <table class="table table-striped">
                <thead style="text-align:center;">
                    <tr>
                        <th>Nama</th>
                        <th>Nama Produk</th>
                        <th>Tanggal Laporan</th>
                        <th>Batch</th>
                        <th>Kem</th>
                        <th>Dus</th>
                        <th>Volume</th>
                        <th>Shift</th>
                        <th>Catatan</th>
                    </tr>
                </thead>
                <tbody style="text-align:center;">
                    <?php 
                    include "koneksi.php";
                    $qry_lgbookpkg=mysqli_query($conn,"select * from lgbookpkg");
                    $no=0;
                    while($dt_lgbookpkg=mysqli_fetch_array($qry_lgbookpkg)){
                        $no++;
                        ?>
                        <tr>
                            <td><?=$dt_lgbookpkg['nama_usernyapkg']?></td>
                            <td><?=$dt_lgbookpkg['nama_pkg']?></td>
                            <td><?=$dt_lgbookpkg['tlaporanpkg']?></td> 
                            <td><?=$dt_lgbookpkg['batch_pkg']?></td>
                            <td><?=$dt_lgbookpkg['kem_pkg']?></td>
                            <td><?=$dt_lgbookpkg['dus_pkg']?></td>
                            <td><?=$dt_lgbookpkg['volume_pkg']?></td>
                            <td><?=$dt_lgbookpkg['shiftspkg']?></td>
                            <td><?=$dt_lgbookpkg['lcatatanpkg']?></td>

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