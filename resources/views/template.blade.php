<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Grand+Hotel|Google+Sans|Potta+One">

    {{--ini font--}}}

    <link rel="stylesheet" href="css/navbar.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <style>
        h1,
        h3,h5,
        b {

            color: rgb(53, 68, 136);
            font-family: Google Sans;
        }

        p {
            font-family: Google Sans;
        }

        a.biru {
            color: rgb(53, 68, 136);
            font-family: Google Sans;

        }

        nav.birutua {
            background-color: rgb(255, 255, 255);
        }

        .container-fluid,
        .jumbotron {
            margin: 0%;
            padding: 1%;
        }
    </style>

    @yield('judulHalaman')
    @yield('cssTambahan')
    @yield('jsTambahan')


</head>

<body>
    <!--kotak utama-->

    <div class="container-fluid" style="margin: 0%; padding:0%; border-radius: 10px 0px 10px 0px; border: black;">

        <!--kotak judul-->
        <div class="cotainer-fluid">
            <div class="container-fluid" style="padding: 1%">
                <h1 style="text-align: center; font-family: Grand Hotel;">Icefin Everything</h1>
            </div>
        </div>

        <!--kotak navigasi-->
        <section style="color: rgba(0, 0, 0, 0.5);">
            <nav class="navbar navbar-expand-sm shift" style="margin-bottom : 0px;">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <b><a class="nav-link biru" href="#">Home</a></b>
                    </li>
                    <li class="nav-item">
                        <b><a class="nav-link biru" href="http://localhost:8000/belajar_laravel/public/pegawai">Pegawai</a></b>
                    </li>
                    <li class="nav-item">
                        <b><a class="nav-link biru" href="http://localhost:8000/belajar_laravel/public/tugas">Tugas</a></b>
                    </li>
                    <li class="nav-item">
                        <b><a class="nav-link biru" href="http://localhost:8000/belajar_laravel/public/agen">Agen</a></b>
                    </li>
                    <li class="nav-item">
                        <b><a class="nav-link oren biru" href="http://localhost:8000/belajar_laravel/public/mahasiswa">Mahasiswa</a></b>
                    </li>
                    <li class="nav-item">
                        <b><a class="nav-link biru" href="https://github.com/icedmuffin/05211940000104">Github Repository</a></b>
                    </li>

                </ul>
            </nav>
        </section>


        <!--kotak header-->
        <div class="container-fluid" style="background-color: rgba(101, 100, 121, 0.055)">

            <div class="row">
                <!--header kanan-->
                <div class="col-md-7">
                    <div class="container">
                        <img class="rounded" src="http://localhost:8000/belajar_laravel/public/pic/header.png" style="width: 100%;">
                    </div>

                </div>

                <!--header kiri-->
                <div class="col-md-5">
                    <div class="container" style="padding: 5%;">
                        <div class="row" style="margin-bottom: 5%;">
                            <div class="col-sm-2" style="padding-top: 5%; border-right: 3px solid rgb(53, 68, 136);">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg"
                                    class="img-fluid" style="max-width: 120%;">
                            </div>
                            <div class="col-sm-10">
                                <p style="font-size: 200%;">
                                    <b style="text-align: center;">
                                        Laravel Project <br>
                                        Pemrogaraman Website</b>
                                </p>
                            </div>
                        </div>


                        <p style="text-align: center;"> Pengerjaan tugas Project ini di kerjakan oleh <br><br>
                            Nama : Naufal S. A. Sunandar <br>
                            NRP : 05211940000104<br>
                            Kelas : Pemrograman Web D <br> <br>
                            Dosen Pengajar : Bapak Johan Atletiko, S.Kom, M.T. <br>

                        </p>
                    </div>

                </div>
            </div>
        </div>





        <div class="container-fluid">

            @yield('konten')
        </div>

        <div class="page-footer font-small pt-4 rounded" style="background-color: rgb(27, 37, 92);">




            </p>
            <div class="container" style="text-align: center">

                <div class="row" style="color: white">
                    <div class="col-sm-6">
                        <h5 style="text-align: center; margin: 0%; color:white">copyright design Naufal Sunandar 2020</h5>
                        <p class="text-center" style="color:white">
                        <br>
                    Sistem Informasi<br>
                    Institut Teknologi Sepuluh November<br>
                    </div>

                    {{--home--}}
                    <div class="col-sm-2">
                        <p>
                            <b class="text-putih" style="color: white; text-align:center">
                            Home Page </b><br><br>
                            Pegawai <br>
                            tugas <br>
                         </p>
                    </div>
                    {{--tugas--}}
                   <div class="col-sm-2">

                        <p>
                           <b class="text-putih" style="color: white; text-align:center">
                            Daftar Tugas </b><br><br>
                            html <br>
                            html dan css <br>
                            Boostrap 4 Framework<br>
                            Final Project <br>
                        </p>



                   </div>
                    {{--Pesonal Profil--}}
                     <div class="col-sm-2">
                       <p>
                          <b class="text-putih" style="color: white; text-align:center">
                            Personal Profil </b><br><br>
                            Instagram <br>
                            linkedIn <br>
                            Repository Github <br>

                        </p>

                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
