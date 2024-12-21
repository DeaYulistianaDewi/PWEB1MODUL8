<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Web Template</title>
        <!--Bootstrap 5 CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"rel="stylesheet">
        <!--jQuery-->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <style>
            body{
                margin: 0;
            }
            .jumbotron-bg{background-image: url('https://fkom.uniku.ac.id/wp-content/uploads/2023/01/Header-Home.jpg');
            background-size:cover;
            background-position:center;
            color:white;
        }
        </style>
    </head>
    <body>
        <!--Bagian Atas:Jumbotron dengan Latar Belakang Gambar-->
        <header class="jumbotron-bg text-white text-center py-5">``
            <div class="container">
                <h1 class="display-4">Selamat Datang di Website Kami</h1>
                <p class="lead">Ini adalah contoh jumbotron dengan latar belakang gambar di bagian atas halaman.</p>
            </div>
        </header>
        <div class="container-fluid my-4">
            <!--Bagian Kiri:Menu-->
            <?php
            include "Latihan_08_01_menu.php";
            ?>
            <!--Bagian Tengah: Artikel-->
            <main class="col-md-10">
                <article>
                    <?php
                    extract($_GET);
                    if(isset($menu)){
                        if($menu == "a"){
                            include "Latihan_08_01.php";
                        }
                    }else{
                        //include "Latihan_08_01_home.php";
                    }
                ?>
                </article>
                </main>
                </div>
                </div>

                <!--Bagian Bawah: Footer-->
                <footer class="bg-dark text-white text-center py-4">
                    <p>&copy;2024 Website Kami.All rights reserved.</p>
                </footer>
                <!--Bootstrap 5 JS-->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
                </body>
                </html>
