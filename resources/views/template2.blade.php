<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navbar.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    @yield('judulHalaman')
    @yield('cssTambahan')
    @yield('jsTambahan')

</head>

<body>
    <!--main-->
    <div class="container-fluid">

        <!--kotak judul-->
        <div class="cotainer-fluid">
            <div class="container-fluid" style="padding: 1%">
                <h1 style="text-align: center">Judul</h1>
            </div>
        </div>

        <!--kotak navigasi-->
        <section style="color: rgba(0, 0, 0, 0.5);">
            <nav class="navbar navbar-expand-sm shift" style="margin-bottom : 0px;">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <b><a class="nav-link biru active" href="#">Home</a></b>
                    </li>
                    <li class="nav-item">
                        <b><a class="nav-link biru" href="#">tugas</a></b>
                    </li>
                </ul>
            </nav>
        </section>

        <!--kotak judul tugas-->
        <div class="container-fluid" style="background-color: rgba(101, 100, 121, 0.055)">

            <p style="text-align: center;"> Tugas Laravel <br><br>
                Nama : - <br>
                NRP : - <br>
                Kelas : - <br> <br>
                Dosen Pengajar : Bapak Johan Atletiko, S.Kom, M.T. <br>
            </p>

        </div>

         <!--kotak konten-->
        <div class="container-fluid">

            @yield('content')
        </div>

        <div class="page-footer font-small pt-4 rounded" style="background-color: rgb(27, 37, 92);">

            <h5 style="text-align: center; margin: 0%; color:white">copyright design Naufal Sunandar 2020</h5>
            <p class="text-center" style="color:white"><br>
                Sistem Informasi<br>
                Institut Teknologi Sepuluh November<br>
            </p>
        </div>

    </div>
</body>

</html>
