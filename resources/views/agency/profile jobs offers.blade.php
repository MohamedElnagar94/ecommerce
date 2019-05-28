@extends('agency.includes_agency.index')
@section('title','الوظائف المعروضة')
@section('heading','الوظائف المقدم اليها')
@section('content')
<!-- ================ start profile ========================== -->
    <section class="container-fluid">
        <div class="row row_default">
            <!-- start right side of profile -->
            <div class="col-md-3 bg_main text-center color-white">
                <div class="image_padding_profile">
                    <div class="border-radius-50 overflow-hidden image_profile_bg">
                        <img class="img-fluid" src="{{url('/')}}/storage/agency/images/profile_img.jpg" alt="">
                    </div>
                </div>
                <div class="w-100">
                    <h6 class="h3">محمد صبرى النجار</h6>
                </div>
                <div class="w-100 mb-4">
                    <h6 class="h4">مهندس ميكنة زراعية</h6>
                </div>
                <div class="w-100 mb-5">
                    <p class="">محمد صبرى النجار خريج كلية زراعة قسم هندسة زراعية تخصص الات وقوى زراعية جامعة المنصورة 2017 بتقدير جيد جدا مع مرتبة الشرف</p>
                </div>
                <div class="text-right mb-5">
                    <ul class="list-unstyled list_profile">
                        <li><a href="profile personal page.html"><i class="fas fa-home"></i>الصفحة الشخصية</a></li>
                        <li><a class="active" href="profile jobs offers.html"><i class="fas fa-tasks"></i>الوظائف المقدم اليها</a></li>
                        <li><a href="profile modify the data.html"><i class="far fa-edit"></i>تعديل البيانات المهنية</a></li>
                        <!-- <li><a href=""><i class="far fa-edit"></i>تعديل بيانات الاتصال</a></li> -->
                        <li><a href=""><i class="fas fa-sign-out-alt"></i>خروج</a></li>
                    </ul>
                </div>
                <div class="d-flex social_media_icon mb-5">
                    <div><a href=""><i class="fab fa-facebook"></i></a></div>
                    <div><a href=""><i class="fab fa-twitter"></i></a></div>
                    <div><a href=""><i class="fab fa-youtube"></i></a></div>
                    <div><a href=""><i class="fab fa-instagram"></i></a></div>
                </div>
                <div class="color-white text-center mb-2">
                    <span>عضو منذ :</span>
                    <span>7 يناير 2014</span>
                </div>
                <div class="color-white text-center mb-4">
                    <span>تم التسجيل :</span>
                    <span>8 ابريل 2019</span>
                </div>
            </div>
            <!-- end right side of profile -->
            <!-- start left side of profile -->
            <div class="col-md-9">
                <div class="p-3">
                    <div class="w-100 text-right mb-3">
                        <div class="w-100 color_main">
                            <div class="font-weight-bolder h5"><i class="fas fa-tasks ml-2"></i>الوظائف المقدم اليها</div>
                            <hr class="color_main">
                        </div>
                        <div class="w-100">
                            <div class="w-100 flex-wrap d-flex">
                                <div class="col-md-6 mb-3 float-right text-center ">
                                    <div class="float-right w-100 job_card_and_detail">
                                        <a href="">
                                            <div class="job_flip position-relative">
                                                <div class="job_card">
                                                    <span class="color_main">مهندس زراعى</span>
                                                </div>
                                                <div class="bg_main job_detail">
                                                    <span class="color-white d-block">مهندس زراعى</span>
                                                    <span class="color-white d-block">شركة محسن للعناية بالحيوانات</span>
                                                    <span class="color-white d-block">البلد : الامارات</span>
                                                    <span class="color-white d-block">تاريخ الوظيفة : 8 / 5 / 2018</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 float-right text-center ">
                                    <div class="float-right w-100 job_card_and_detail">
                                        <a href="">
                                            <div class="job_flip position-relative">
                                                <div class="job_card">
                                                    <span class="color_main">مهندس زراعى</span>
                                                </div>
                                                <div class="bg_main job_detail">
                                                    <span class="color-white d-block">مهندس زراعى</span>
                                                    <span class="color-white d-block">شركة محسن للعناية بالحيوانات</span>
                                                    <span class="color-white d-block">البلد : الامارات</span>
                                                    <span class="color-white d-block">تاريخ الوظيفة : 8 / 5 / 2018</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 float-right text-center ">
                                    <div class="float-right w-100 job_card_and_detail">
                                        <a href="">
                                            <div class="job_flip position-relative">
                                                <div class="job_card">
                                                    <span class="color_main">مهندس زراعى</span>
                                                </div>
                                                <div class="bg_main job_detail">
                                                    <span class="color-white d-block">مهندس زراعى</span>
                                                    <span class="color-white d-block">شركة محسن للعناية بالحيوانات</span>
                                                    <span class="color-white d-block">البلد : الامارات</span>
                                                    <span class="color-white d-block">تاريخ الوظيفة : 8 / 5 / 2018</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 float-right text-center ">
                                    <div class="float-right w-100 job_card_and_detail">
                                        <a href="">
                                            <div class="job_flip position-relative">
                                                <div class="job_card">
                                                    <span class="color_main">مهندس زراعى</span>
                                                </div>
                                                <div class="bg_main job_detail">
                                                    <span class="color-white d-block">مهندس زراعى</span>
                                                    <span class="color-white d-block">شركة محسن للعناية بالحيوانات</span>
                                                    <span class="color-white d-block">البلد : الامارات</span>
                                                    <span class="color-white d-block">تاريخ الوظيفة : 8 / 5 / 2018</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 float-right text-center ">
                                    <div class="float-right w-100 job_card_and_detail">
                                        <a href="">
                                            <div class="job_flip position-relative">
                                                <div class="job_card">
                                                    <span class="color_main">مهندس زراعى</span>
                                                </div>
                                                <div class="bg_main job_detail">
                                                    <span class="color-white d-block">مهندس زراعى</span>
                                                    <span class="color-white d-block">شركة محسن للعناية بالحيوانات</span>
                                                    <span class="color-white d-block">البلد : الامارات</span>
                                                    <span class="color-white d-block">تاريخ الوظيفة : 8 / 5 / 2018</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 float-right text-center ">
                                    <div class="float-right w-100 job_card_and_detail">
                                        <a href="">
                                            <div class="job_flip position-relative">
                                                <div class="job_card">
                                                    <span class="color_main">مهندس زراعى</span>
                                                </div>
                                                <div class="bg_main job_detail">
                                                    <span class="color-white d-block">مهندس زراعى</span>
                                                    <span class="color-white d-block">شركة محسن للعناية بالحيوانات</span>
                                                    <span class="color-white d-block">البلد : الامارات</span>
                                                    <span class="color-white d-block">تاريخ الوظيفة : 8 / 5 / 2018</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 float-right text-center ">
                                    <div class="float-right w-100 job_card_and_detail">
                                        <a href="">
                                            <div class="job_flip position-relative">
                                                <div class="job_card">
                                                    <span class="color_main">مهندس زراعى</span>
                                                </div>
                                                <div class="bg_main job_detail">
                                                    <span class="color-white d-block">مهندس زراعى</span>
                                                    <span class="color-white d-block">شركة محسن للعناية بالحيوانات</span>
                                                    <span class="color-white d-block">البلد : الامارات</span>
                                                    <span class="color-white d-block">تاريخ الوظيفة : 8 / 5 / 2018</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 float-right text-center ">
                                    <div class="float-right w-100 job_card_and_detail">
                                        <a href="">
                                            <div class="job_flip position-relative">
                                                <div class="job_card">
                                                    <span class="color_main">مهندس زراعى</span>
                                                </div>
                                                <div class="bg_main job_detail">
                                                    <span class="color-white d-block">مهندس زراعى</span>
                                                    <span class="color-white d-block">شركة محسن للعناية بالحيوانات</span>
                                                    <span class="color-white d-block">البلد : الامارات</span>
                                                    <span class="color-white d-block">تاريخ الوظيفة : 8 / 5 / 2018</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- start right side of profile -->
        </div>
    </section>
    <!-- ================ end profile ========================== -->
@endsection