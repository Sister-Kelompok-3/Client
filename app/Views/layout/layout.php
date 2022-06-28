<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>

<body class="bg-light">
    <div class="main-container d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-light " style="width: 230px;">
            <div class="header-box px-2 pt-3 pb-2">
                <h2 class="fs-4">
                    <span class="text-primary">Frozen Food</span>
                </h2>
            </div>
            <hr>
            <ul id="sidebar" class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="/" class="nav-link btn-outline-primary ">
                        <span class="material-symbols-outlined">
                            home
                        </span>
                        Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/barang" class="nav-link btn-outline-primary ">
                        <span class="material-symbols-outlined">
                            widgets
                        </span>
                        Daftar Barang
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/transaksi" class="nav-link btn-outline-primary ">
                        <span class="material-symbols-outlined">
                            list_alt
                        </span>
                        Transaksi Masuk
                    </a>
                </li>
                <li class="nav-item ">
                <li class="nav-item">
                    <a href="/transaksi" class="nav-link btn-outline-primary ">
                        <span class="material-symbols-outlined">
                            exit_to_app
                        </span>
                        Transaksi Keluar
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link btn-outline-primary ">
                        <span class="material-symbols-outlined">
                            person
                        </span>
                        User
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link btn-outline-primary ">
                        <span class="material-symbols-outlined">
                            logout
                        </span>
                        LogOut
                    </a>
                </li>
            </ul>
            <hr>
        </div>
        <div class="d-blok container" style="height: 100vh">
            <?= $this->renderSection('content') ?>
        </div>
    </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>