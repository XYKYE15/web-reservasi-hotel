<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Unper Hotel</title>
    <!-- CDN bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />

    <!-- Icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- Swiper Style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- style.css -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Style Fonts Google -->
    <style>
        .avaibility-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 768px) {
            .avaibility-form {
                margin-top: 15px;
                padding: 0 35px;
            }
        }
    </style>

</head>

<body class="bg-light">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-5 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Unper Hotel</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Kategori Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Fasilitas Hotel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Tentang Kami</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal"
                        data-bs-target="#loginModal">
                        Login
                    </button>
                    <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal"
                        data-bs-target="#registerModal">
                        Daftar
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Modal Start -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <i class="bi bi-person-fill fs-3 me-2"></i>
                        <h5 class="modal-title" align-items-center>User Login</h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none" />
                        </div>
                        <div class="mb-5">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark shadow-none">
                                LOGIN
                            </button>
                            <a href="javascript:void(0)" class="text-secondary text-decoration-none">Lupa Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <i class="bi bi-person-fill-add fs-3 me-2"></i>
                        <h5 class="modal-title" align-items-center>Daftar Akun</h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            Catatan: harap masukan sesuai dengan (KTP/KK, Pasport) yang akan
                            di perlukan saat proses check-in.
                        </span>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control shadow-none" />
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control shadow-none" />
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">No Handphone</label>
                                    <input type="number" class="form-control shadow-none" />
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Picture</label>
                                    <input type="file" class="form-control shadow-none" />
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">PinCode</label>
                                    <input type="number" class="form-control shadow-none" />
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control shadow-none" />
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control shadow-none" />
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Ulangi Password</label>
                                    <input type="password" class="form-control shadow-none" />
                                </div>
                                <div class="col-md-6 p-0 mb-2">
                                    <label class="form-label">Alamat</label>
                                </div>
                                <textarea class="form-contro shadow-none mb-3" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark shadow-none">
                                DAFTAR
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal End -->

    <!-- fluid Section Start -->
    <div class="fluid-container px-lg-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/1.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/2.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/3.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/4.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/5.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/6.jpg" class="w-100 d-block" />
                </div>
            </div>
        </div>
    </div>
    <!-- fluid Section End -->

    <!-- Form Cek avaibility Start -->
    <div class="container avaibility-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-3">
                <h5 class="mb-4">Cek Booking Avaibility</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500" class="form-label">Check-in</label>
                            <input type="date" class="form-control shadow-none" />
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500" class="form-label">Check-out</label>
                            <input type="date" class="form-control shadow-none" />
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500" class="form-label">Adult</label>
                            <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500" class="form-label">Anak-Anak</label>
                            <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Form Cek avaibility End -->

    <!-- Kamar Section Start -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Pilihan Kamar</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                    <img src="images/kamar/1.jpg" class="card-img-top" alt="..." />

                    <div class="card-body">
                        <h5 class="h-font">Superior Room</h5>
                        <h6 class="mb-4">IDR 650.000/malam</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Fasilitas:</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap mb-2">
                                2 Kamar
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap mb-2">
                                1 Kamar Mandi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap mb-2">
                                Include Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Meja
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Kursi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 TV
                            </span>
                        </div>
                        <div class="rating mb-3">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white shadow-none custom-bg">Pesan Sekarang</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">
                                Detail Kamar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                    <img src="images/kamar/1.jpg" class="card-img-top" alt="..." />

                    <div class="card-body">
                        <h5 class="h-font">Superior Room</h5>
                        <h6 class="mb-4">IDR 650.000/malam</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Fasilitas:</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap mb-2">
                                2 Kamar
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap mb-2">
                                1 Kamar Mandi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap mb-2">
                                Include Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Meja
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Kursi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 TV
                            </span>
                        </div>
                        <div class="rating mb-3">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white shadow-none custom-bg">Pesan Sekarang</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">
                                Detail Kamar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                    <img src="images/kamar/1.jpg" class="card-img-top" alt="..." />

                    <div class="card-body">
                        <h5 class="h-font">Superior Room</h5>
                        <h6 class="mb-4">IDR 650.000/malam</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Fasilitas:</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap mb-2">
                                2 Kamar
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap mb-2">
                                1 Kamar Mandi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap mb-2">
                                Include Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Meja
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Kursi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 TV
                            </span>
                        </div>
                        <div class="rating mb-3">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white shadow-none custom-bg">Pesan Sekarang</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">
                                Detail Kamar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark raounded-0 shadow-none">Kamar Lainya</a>
            </div>
        </div>
    </div>
    <!-- Kamar Section End -->

    <!-- Facilitas Kamar Section Start -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Fasilitas</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <i class="bi bi-wifi"></i>
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <i class="bi bi-wifi"></i>
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <i class="bi bi-wifi"></i>
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <i class="bi bi-wifi"></i>
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <i class="bi bi-wifi"></i>
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark raounded-0 shadow-none">Fasilitas Lainya</a>
            </div>
        </div>
    </div>

    <!-- Testimonial Section Start -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonial</h2>

    <div class="container">
        <div class="swiper swiper-testimonial">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center p-4">
                        <img src="images/features/star.svg" width="40px" alt="" />
                        <h6 class="m-0 ms-2">User Testimonial</h6>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Obcaecati ratione aut repellat laudantium reiciendis aspernatur?
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center p-4">
                        <img src="images/features/star.svg" width="40px" alt="" />
                        <h6 class="m-0 ms-2">User Testimonial</h6>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Obcaecati ratione aut repellat laudantium reiciendis aspernatur?
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center p-4">
                        <img src="images/features/star.svg" width="40px" alt="" />
                        <h6 class="m-0 ms-2">User Testimonial</h6>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Obcaecati ratione aut repellat laudantium reiciendis aspernatur?
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center p-4">
                        <img src="images/features/star.svg" width="40px" alt="" />
                        <h6 class="m-0 ms-2">User Testimonial</h6>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Obcaecati ratione aut repellat laudantium reiciendis aspernatur?
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Testimonial Section End -->

    <!-- Reach Us Section Start -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Tentang Kami</h2>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 p-4 mb-lg-0 mb-2 bg-white rounded">
                <iframe class="w-100 rounded" height="320px"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.0131320745795!2d108.22022337479886!3d-7.352420872336463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f5770cd3fd521%3A0x7df02d82c51f464f!2sUniversitas%20Perjuangan%20Tasikmalaya!5e0!3m2!1sid!2sid!4v1735640532943!5m2!1sid!2sid"
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Hubungi Kami</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter-x">Twitter</i>
                        </span>
                    </a>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook"> Facebook </i>
                        </span>
                    </a>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram"> Instagram </i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Reach Us Section End -->

    <!-- Footer Section Start -->
    <footer class="container-fluid bg-dark text-white mt-5">
        <div class="row">
            <div class="col-lg-4 p-4">
                <h3 class="h-font fw-bold fs-3 mb-2">UNPER HOTEL</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum
                    perspiciatis veniam corporis exercitationem vero harum?
                </p>
            </div>
            <div class="col-lg-4 p-4 ">
                <h5 class="mb-3">Links</h5>
                <a href="#" class="d-inline-block mb-2 text-white text-decoration-none">Home</a><br />
                <a href="#" class="d-inline-block mb-2 text-white text-decoration-none">Fasilitas</a><br />
                <a href="#" class="d-inline-block mb-2 text-white text-decoration-none">Kamar</a><br />
                <a href="#" class="d-inline-block mb-2 text-white text-decoration-none">Hubungi Kami</a><br />
                <a href="#" class="d-inline-block mb-2 text-white text-decoration-none">Tentang Kami</a><br />
            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Ikuti Kami</h5>
                <a href="#" class="d-inline-block text-white text-decoration-none mb-2">
                    <i class="bi bi-twitter-x me-1 mr-2"></i>
                    Twitter
                </a>
                <a href="#" class="d-inline-block text-white text-decoration-none mb-2">
                    <i class="bi bi-facebook me-1 mr-2"></i>
                    Facebook
                </a>
                <a href="#" class="d-inline-block text-white text-decoration-none mb-2">
                    <i class="bi bi-instagram me-1 m"></i>
                    Instagram
                </a>
            </div>
        </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Bootstrap jwipscript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    <!-- Swiper javascript -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- app.js -->
    <script src="src/app.js"></script>
</body>

</html>