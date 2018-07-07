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
                    <img class="first-slide" src="/images/1.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>اندونزی | جزیره بالی </h1>
                            <p>تور بالی 20 تیر 1397 </p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">ثبت نام</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="/images/2.jpg" alt="Second slide">
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
                <div class="col-md-6">
                    <div class="row  text-right">
                        <div class="col-12">
                            <img class="card-img-right flex-auto d-none d-lg-block w-100" alt="bali"
                                 style="width: 200px; height: 200px;" src="{{asset($tour->media)}}">
                        </div>
                        <div>
                        {{$tour->title}}
                        </div>
                        <div class="col-12">
                        {{$tour->description}}
                        </div>
                        <div class="col-12">
                        زمان شروع و پایان تور
                            {{$tour->start_time.' - '.$tour->end_time}}
                        </div>
                        <div class="col-12">
                        ظرفیت تور {{$tour->capacity}}
                        </div>
                        <div class="col-12">
                        هزینه تور {{$tour->price}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="username">نام کاربری</label>
                            <input type="text" class="form-control" id="username" placeholder="نام کاربری">
                        </div>
                        <div class="form-group">
                            <label for="password">گذر واژه</label>
                            <input type="password" class="form-control" id="password" placeholder="گذرواژه">
                        </div>
                        <div class="form-group">
                            <label for="email">ایمیل</label>
                            <input type="email" class="form-control" id="email" placeholder="ایمیل">
                        </div>
                        <div class="form-group">
                            <label for="name">نام و نام خانوادگی</label>
                            <input type="text" class="form-control" id="name" placeholder="نام و نام خانوادگی">
                        </div>
                        <div class="form-group">
                            <label for="phone">تلفن</label>
                            <input type="text" class="form-control" id="phone" placeholder="تلفن">
                        </div>
                        <div class="form-group">
                            <label for="address">آدرس</label>
                            <input type="text" class="form-control" id="address" placeholder="آدرس">
                        </div>
                        <div class="form-group">
                            <label for="codemeli">کد ملی</label>
                            <input type="text" class="form-control" id="codemeli" placeholder="کد ملی">
                        </div>
                        <button type="submit" class="btn btn-primary">ثبت نام</button>

                    </form>
                </div>
            </div>

        </div>
        </div>
    </main>
@endsection