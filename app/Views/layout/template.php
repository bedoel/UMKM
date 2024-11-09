<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdn.lineicons.com/5.0/lineicons.css" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg py-4 py-lg-0 shadow">
        <div class="container px-4">
            <h1>UMKM</h1>
            <button
                class="navbar-toggler border-0"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#top-navbar"
                aria-controls="top-navbar">
                <i class="lni lni-menu-hamburger-1"></i>
            </button>
            <div
                class="offcanvas offcanvas-end"
                tabindex="-1"
                id="top-navbar"
                aria-labelledby="offcanvasRightLabel">
                <button
                    class="navbar-toggler border-0"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#top-navbar"
                    aria-controls="top-navbar">
                    <div class="d-flex justify-content-between p-3">
                        <h1>UMKM</h1>
                        <i class="lni lni-xmark-circle"></i>
                    </div>
                </button>
                <ul class="navbar-nav ms-lg-auto p-4 p-lg-0">
                    <li class="nav-item px-3 px-lg-0 py-1 py-lg-4">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item px-3 px-lg-0 py-1 py-lg-4">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item px-3 px-lg-0 py-1 py-lg-4 dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item px-3 px-lg-0 py-1 py-lg-4">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item px-3 px-lg-0 py-1 py-lg-4">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <script src="<?= base_url('assets/js/script.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>