<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Welcome</title>
    @vite('resources/sass/app.scss')
    @vite('resources/css/app.css')
</head>

<body>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hero Landing</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    </head>

    <body>

        <div class="container-fluid">
            <div class="row no-gutter">
                <!-- kiri -->
                <div class="col-md-6 d-none d-md-flex bg-image">
                    <img id="hero" src="{{ Vite::asset('resources/images/beruang_gokil.png') }}"
                        alt="hero_beruang">
                </div>
                <!-- kanan -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="content d-flex align-items-center">

                        <!-- isi kanan -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 col-xl-11 mx-auto">
                                    <div class="text__area">
                                        <div class="brand">
                                            <img id="logo" src="{{ Vite::asset('resources/images/logo.png') }}"
                                                alt="logo">
                                        </div>
                                        <div class="flex align label ">
                                            <i class='bx bxs-arrow-to-right py-1'></i>
                                            <p class="ms-2">mengenal lebih dalam tentang dirimu</p>
                                        </div>
                                        <div class="text">
                                            <h5 class="display-5 ">Yuk, Cari Tahu Pribadi Seperti Apa Kamu?
                                            </h5>
                                            <p>Berani Coba?</p>
                                        </div>
                                        <a href="/" class="btn btn-primary ">Ikuti tes kepribadian <i
                                                class='bx bx-right-arrow-alt'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </body>

    </html>
    @vite('resources/js/app.js')
</body>

</html>
