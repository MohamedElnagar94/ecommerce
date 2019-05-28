<div class="all_head">
        <hr>
        <div class="head_background">
            <div class="container">
                <div class="row">
                    <h5 class="head_h4 col-md-12">اهلا بكم فى شركة رمضان لالحاق العمالة المصرية بالخارج <span>ترخيص رقم 211 شركات</span></h5>
                </div>
            </div>
        </div>
        <div class="head_logo">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-sm-5 col-md-3">
                        <div class="logo">
                            <img class="img-fluid w-75" src="{{url('/')}}/storage/agency/images/logo.png" alt="شركة رمضان" title="شركة رمضان">
                        </div>
                    </div>
                    <div class="col-8 col-sm-7 col-md-9">
                        <div class="col-12 col-md-6 col-lg-4 float-right">
                            <div class="company_time all_time">
                                <div class="col-2 col-lg-4 float-right">
                                    <div class="clock d-flex align-items-center">
                                        <i class="far fa-clock"></i>
                                    </div>
                                </div>
                                <div class="col-10 col-lg-8 float-right">
                                    <div class="clock d-flex align-items-center">
                                        <div class="w-100">
                                            <div class="d-block time_work time_word">
                                                <span class="">وقت العمل</span>
                                            </div>
                                            <div class="d-block time_work time_clock">
                                                <span>08:00</span>
                                                <span>الى</span>
                                                <span>18:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 float-right">
                            <div class="company_email all_time">
                                <div class="col-2 col-lg-4 float-right">
                                    <div class="clock d-flex align-items-center">
                                        <i class="far fa-envelope-open"></i>
                                    </div>
                                </div>
                                <div class="col-10 col-lg-8 float-right">
                                    <div class="clock d-flex align-items-center">
                                        <div class="w-100">
                                            <div class="d-block time_work time_word">
                                                <span class="">الاميل</span>
                                            </div>
                                            <div class="d-block time_work time_clock">
                                                <span>example@info.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 float-right">
                            <div class="company_phone all_time">
                                <div class="col-2 col-lg-4 float-right">
                                    <div class="clock d-flex align-items-center">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-10 col-lg-8 float-right">
                                    <div class="clock d-flex align-items-center">
                                        <div class="w-100">
                                            <div class="d-block time_work time_word">
                                                <span class="">التليفون</span>
                                            </div>
                                            <div class="d-block time_work time_clock">
                                                <span>201052341628+</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="all_nav">
            <hr>
            <nav class="navbar navbar-expand-lg navbar-light bg-white w-100">
                <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse w-100" id="navbarNavDropdown">
                        <ul class="navbar-nav w-100">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('index')}}">الرئيسية <span class="sr-only">(current)</span></a>
                            </li>
                            @if (Request::path() === '/')
                            <li class="nav-item">
                                <a class="nav-link" href="#about-us">عن الشركة</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">خدماتنا</a>
                            </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('news.index')}}">الاخبار</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contactUs.index')}}">اتصل بنا</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('papers.index')}}">الاوراق المطلوبة للسفر</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('employer.index')}}">تسجيل اصحاب العمل</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('cv.index')}}">تسجيل السيرة الزاتية</a>
                            </li>
                        </ul>
                    </div>
                    {{-- <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav w-100">
                            <li class="nav-item link_left">
                                <a class="nav-link" href="{{route('cv.index')}}">التسجيل</a>
                            </li>
                            <li class="nav-item link_left">
                                <a class="nav-link" href="{{route('login.index')}}">دخول</a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- ================ end header ========================== -->