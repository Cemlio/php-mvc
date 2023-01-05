<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial- scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="http://localhost/phpmvc/public/css/bootstrap.css">
</head>
<body>
    <!-- <div class="container mt-5">
        <div class="card" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="img/gambar2.jpg" class="card-img" alt="...">
                </div> -->
                <div class="jumbotron text-center">
                    <center>
                        <h3>Daftar Tenaga Pendidik di Jurusan Rekayasa Perangkat Lunak</h3>
                    </center>
                </div>
                <div class="container">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Mata Pelajaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>IVANS ZUWANTA</td>
                                <td>Pengajar RPL</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>ERVI RAHMAWATI</td>
                                <td>Pengajar RPL</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>NOVI DYAH PUSPITASARI</td>
                                <td>Pengajar RPL</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>SAFIRA MAYA SHOVIE</td>
                                <td>Pengajar RPL</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>KHOIRUR ROZIQ</td>
                                <td>Pengajar RPL</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>WAHYU TRI WULANSARI</td>
                                <td>Pengajar RPL</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>FIKROTU DWI FUADATUZZAHRO</td>
                                <td>Pengajar RPL</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>LABIB FAYUMI</td>
                                <td>Pengajar RPL</td>
                            </tr>
                        </tbody>
                    </table>
            
                </div>
                <!-- </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h3>Blog</h3>
                    <?php foreach ($data['blog'] as $blog) : ?>
                        <u1>
                            <li><?= $blog['penulis']; ?></li>
                            <li><?= $blog['judul']; ?></li>
                            <li><?= $blog['tulisan']; ?></li>
                        </u1>
                    <?php endforeach; ?>
                </div>
            </div>
        </div> -->
    </body>
    <div class="bg-dark text-center p-4 text-light">
        <small>Copyright &copy; 2022. Vitantra-32 | All rights reserved.</small> 
    </div>
</html>