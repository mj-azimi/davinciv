<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>virmuni</title>
    <link rel="stylesheet" href="virmuni_front/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/4f044d8820.js" crossorigin="anonymous"></script>
<script src="/plugins/jquery/jquery-3.6.0.min.js"></script>

</head>

<body dir="rtl">
    <div class="d-flex d-md-none align-items-center position-relative">
        <nav
            class="navbar p-2 bg-light col-6 d-md-none d-flex navbar-expand-lg justify-content-end container-fluid position-absolute">
            <div class="container-fluid justify-content-center col-6 d-flex">
                <div class="d-flex">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#">فهرست</a>
                </div>
                <div class="d-flex">
                    <div class="collapse navbar-collapse col-6" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">خانه</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">بلاگ</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    راهنما
                                </a>
                                <ul class="dropdown-menu text-end">
                                    <li><a class="dropdown-item" href="#">راهنمای خرید</a></li>
                                    <li><a class="dropdown-item" href="#">آموزش</a></li>
                                    <li><a class="dropdown-item" href="#">سوالات متداول</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="col-6 bg-light class d-flex justify-content-end align-items-end p-2 position-absolute btn_log">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn_login" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                ورود | عضویت
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-between">
                            <h5 class="modal-title" id="exampleModalLabel">ثبت نام</h5>
                            <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">...</div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-primary">
                                ذخیره
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-wrap align-items-start asidde_tabs_virmuni">
        <aside class="d-none d-md-flex flex-column align-items-center justify-content-evenly h-100 col-md-2 col-lg-1">
            <div class="nav flex-column align-items-center justify-content-evenly h-100 nav-pills me-3" id="v-pills-tab"
                role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                    aria-selected="true">
                    خانه
                </button>
                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                    aria-selected="false" >
                    شماره مجازی
                </button>
                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                    aria-selected="false">
                    سیمکارت خارجی
                </button>
                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-settings" type="button" role="tab"
                    aria-controls="v-pills-settings" aria-selected="false">
                    پنل پیامکی
                </button>
                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-settings" type="button" role="tab"
                    aria-controls="v-pills-settings" aria-selected="false">
                    اکانت ChatGPT
                </button>
            </div>
        </aside>
<?php /**PATH /home/joorjin/Documents/hashemi/davinciv/resources/views/layouts/header.blade.php ENDPATH**/ ?>