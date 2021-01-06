<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <style>
		h1,
		h3 {
            font-family: Audiowide;
			color: rgb(53, 68, 136);
		}

		a.biru {
			color: rgb(53, 68, 136);
		}

		nav.birutua {
			background-color: rgb(255, 255, 255);
		}
    </style>

    @yield('judul')
    @yield('cssTambahan')
    @yield('jsTambahan')

</head>

<body>
    {{-- selamat natal bagi yang merayakan --}}

    {{-- kotak utama --}}
	<div class="container-fluid" style="margin: 0%; padding:0%">

        {{-- Judul --}}
        <div class="cotainer-fluid">
            <div class="container-fluid" style="padding: 1%">
                <h3 style="text-align: center">Icefin Everything</h3>
            </div>
        </div>

        {{-- Navigasi bar--}}
        <nav class="navbar navbar-expand-sm birutua" style="margin-bottom : 0px; ">

			<ul class="navbar-nav">

				<li class="nav-item">
					<b><a class="nav-link biru" href="index.html">Biodata</a></b>
				</li>
				<li class="nav-item">
					<b><a class="nav-link biru" href="05211940000104.html">Bootstrap</a></b>
				</li>

				<b><a class="nav-link biru" href="#">HTML | </a></b>

				<li class="nav-item">
					<a class="nav-link oren biru" href="link/05211940000104_1.html">1</a>
				</li>
				<li class="nav-item">
					<a class="nav-link biru" href="link/05211940000104_2.html">2</a>
				</li>
				<li class="nav-item">
					<a class="nav-link biru" href="link/05211940000104_3.html">3</a>
				</li>
				<li class="nav-item">
					<a class="nav-link biru" href="link/05211940000104_4.html">4</a>
				</li>
				<li class="nav-item">
					<a class="nav-link biru" href="link/05211940000104_5.html">5</a>
				</li>
				<li class="nav-item">
					<b><a class="nav-link biru" href="myform.html"> |  myform</a></b>
				</li>

			</ul>
		</nav>


        {{-- Header nanti ganti--}}
        <div class="jumbotron text-center">

            <div class="row">
                {{-- header Kanan --}}
                <div class="col-sm-8" style=" background-image:url(pic/header.png);  background-size: cover;margin:0; back">
                    <img class="image" src="pic/header.png" style="image" >
                </div>

                {{-- header Kiri --}}
                <div class="col-sm-4">
                    <h1 style="color:white" >Laravel Project</h1>
                    <h3 style="color:white">Naufal S. A. Sunandar</h3>
                </div>
            </div>
		</div>





		<div class="container">

            @yield('konten');

		</div>


		<div class="page-footer font-small pt-4 rounded"
			style=" background-image:url(pic/footer.png);  background-size: cover;margin-bottom:0">
			<div class="row">
				<div class="col">

				</div>
				<div class="col">
					<p class="text-center" style="color: white;">copyright naufal sunandar 2020</p>
				</div>
				<div class="col"></div>
			</div>
		</div>

	</div>
</body>

</html>
