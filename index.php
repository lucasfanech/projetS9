<?php
// COnnexion à la base de données et récupération des produits
require_once 'db.php';
$products = $db->query('SELECT * FROM products');
$products = $products->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="py-2 bg-body-tertiary border-bottom">
        <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2 active" aria-current="page">Accueil</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Nos produits</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Tarifs</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">FAQ</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">A propos</a></li>
            </ul>
            <ul class="nav">
                <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Login</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Sign up</a></li>
            </ul>
        </div>
    </nav>
    <header class="py-3 mb-4 border-bottom">
        <div class="container d-flex flex-wrap justify-content-center">
            <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                <img class="mx-4" src="img/logo.jpg" height="64px">
                <span class="fs-4">JEEJ BISCUITS</span>
            </a>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
        </div>
    </header>
    <div class="py-3 mb-4 container">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
            <div class="col-md-6 p-lg-5 mx-auto my-5">
                <h1 class="display-3 fw-bold">Conçu pour les humains par des chevaux</h1>
                <h3 class="fw-normal text-muted mb-3">Découvrez nos produits</h3>
                <div class="d-flex gap-3 justify-content-center lead fw-normal">
                    <a class="icon-link" href="#products">
                        Nos produits
                    </a>
                    <a class="icon-link" href="#prices">
                        Tarifs
                    </a>
                </div>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>

        <div class="row">
            <div class="col-md-6 text-bg-dark text-center overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5"><?php echo $products[0]['title'] ?></h2>
                    <p class="lead"><?php echo $products[0]['description'] ?></p>
                </div>
                <div class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
            <div class="col-md-6 bg-body-tertiary text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5"><?php echo $products[1]['title'] ?></h2>
                    <p class="lead"><?php echo $products[1]['description'] ?></p>
                </div>
                <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 bg-body-tertiary text-center overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5"><?php echo $products[2]['title'] ?></h2>
                    <p class="lead"><?php echo $products[2]['description'] ?></p>
                </div>
                <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
            <div class="col-md-6 text-bg-dark text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5"><?php echo $products[3]['title'] ?></h2>
                    <p class="lead"><?php echo $products[3]['description'] ?></p>
                </div>
                <div class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Free</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>10 users included</li>
                                <li>2 GB of storage</li>
                                <li>Email support</li>
                                <li>Help center access</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Pro</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$15<small class="text-body-secondary fw-light">/mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>20 users included</li>
                                <li>10 GB of storage</li>
                                <li>Priority email support</li>
                                <li>Help center access</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-bg-primary border-primary">
                            <h4 class="my-0 fw-normal">Enterprise</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$29<small class="text-body-secondary fw-light">/mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>30 users included</li>
                                <li>15 GB of storage</li>
                                <li>Phone and email support</li>
                                <li>Help center access</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</body>
