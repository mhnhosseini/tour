@extends('layouts.app')

@section('content')
    <main role="main">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="images/1.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>اندونزی | جزیره بالی </h1>
                            <p>تور بالی 20 تیر 1397 </p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">ثبت نام</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="images/2.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>ترکیه | آنتالیا</h1>
                            <p>تور آنتالیا 22 تیر 1397</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">ثبت نام</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">قبلی</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">بعدی</span>
        </a>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="telegram" src="images/telegram.png" alt="Telegram">
                </div>
                <div class="col-md-8">
                    <div class="card flex-md-row mb-4">
                        <img class="card-img-right flex-auto d-none d-lg-block" alt="bali" style="width: 200px; height: 200px;" src="images/1.jpg">

                        <div class="card-body align-items-end">
                            <h3 class="mb-2">
                                <a class="" href="#">تور مسافرتی به جزیره بالی</a>
                            </h3>
                            <div class="mb-2">20 تیر 1397</div>
                            <p class="card-text mb-auto">تور 5 روزه به سواحل بالی در اندونزی به همراه هتل و
                                دیگر امکانات با تضمین کمترین هزینه</p>
                            <a href="#">ثبت نام</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
