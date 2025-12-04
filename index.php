<html>
<head>
    <title>Buku Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">BukuTamu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=bukutamu">Buku Tamu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=pengguna">Data Pengguna</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container my-4">
        <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            if ($page == 'home') include "home.php";
            if ($page == 'bukutamu') include "list.php";
            if ($page == 'create') include "create.php";
            if ($page == 'edit') include "edit.php";
        ?>
    </div>
</body>