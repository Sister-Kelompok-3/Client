<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Dashboard</title>
    <style>
        #side_nav {
            background: black;
            min-width: 250px;
            max-width: 250px;

        }

        .content {
            min-height: 100vh;
            width: 100%;
        }

        .u-line {
            background-color: whitesmoke;
        }

        .sidebar li.active {
            background-color: white;
            border-radius: 10px;

        }

        .sidebar li.active a,
        .sidebar li.active a:hover {
            color: grey;
        }

        .sidebar li a {
            color: white;
        }
    </style>
    <script>
        $(".sidebar ul li").on('click',
            function() {
                $(".sidebar li.active").removeClass('active');
                $(this).addClass('active');

            })
    </script>
</head>

<body>


    <div class="main-container d-flex">
        <div class="sidebar row" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4">
                <h1 class="fs-4">
                    <span class="text-white rounded shadow px-2">F</span>
                </h1>
                <!-- btn tdk muncul -->
                <button class="btn close-btn px-1 py-0 text-dark">
                    <i class="fal fa-stream"></i>
                </button>
            </div>
            <ul class="list-unstyled px-2 pt-3 pb-4">
                <li class="active">
                    <a href="" class="text-decoration-none px-3 py-2 d-block">
                        <i class="fa-solid fa-house"></i>Beranda</a>
                </li>
                <li class="">
                    <a href="" class="text-decoration-none px-3 py-2 d-block">
                        <i class="bi bi-house-door-fill"></i>Daftar Barang</a>
                </li>
                <li class="">
                    <a href="" class="text-decoration-none px-3 py-2 d-block">
                        <i class="bi bi-house-door-fill"></i>Transaksi Masuk</a>
                </li>
                </li>
                <li class="">
                    <a href="" class="text-decoration-none px-3 py-2 d-block">
                        <i class="bi bi-house-door-fill"></i>Transaksi Keluar</a>
                </li>
                <li class="">
                    <a href="" class="text-decoration-none px-3 py-2 d-block">
                        <i class="bi bi-house-door-fill"></i>User</a>
                </li>
                <li class="">
                    <a href="" class="text-decoration-none px-3 py-2 d-block">
                        <i class="bi bi-house-door-fill"></i>LogOut</a>
                </li>

            </ul>
            <hr class="u-line mx-2">
        </div>


        <div class="d-blok ">
            <div class="row align-items-start">

                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand">Navbar</a>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="content ">
                    <?= $this->renderSection('content') ?>
                </div>

            </div>

        </div>
    </div>








    </nav>
    <?= $this->renderSection('content') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>