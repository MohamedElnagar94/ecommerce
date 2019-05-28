@extends('agency.includes_agency.index')
@section('title','الصفحة الشخصية')
@section('heading','الصفحة الشخصية')
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
                        <li><a class="active" href="profile personal page.html"><i class="fas fa-home"></i>الصفحة الشخصية</a></li>
                        <li><a href="profile jobs offers.html"><i class="fas fa-tasks"></i>الوظائف المقدم اليها</a></li>
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
                            <div class="font-weight-bolder h5"><i class="fas fa-user ml-2"></i>الملف الشخصى</div>
                            <hr class="color_main">
                        </div>
                        <div class="w-100">
                            <div class="w-100 mb-3 col-md-12">
                                <span class="span_profile"><i class="fas fa-square ml-2"></i>الاسم بالكامل :</span>
                                <span class="color_main">محمد صبرى السيد ابراهيم النجار</span>
                            </div>
                            <div class="w-100 flex-wrap d-flex">
                                <div class="col-md-6 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>الوظيفة :</span>
                                    <span class="color_main">مهندس زراعى</span>
                                </div>
                                <div class="col-md-6 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>التخصص :</span>
                                    <span class="color_main">الات وقوى زراعية</span>
                                </div>
                            </div>
                            <div class="w-100 mb-3 col-md-12">
                                <span class="span_profile"><i class="fas fa-square ml-2"></i>وصف الوظيفة :</span>
                                <span class="color_main">مهندس زراعى خريج كلية زراعة تخصص الات وقوى زراعية</span>
                            </div>
                            <div class="w-100 flex-wrap d-flex">
                                <div class="col-md-4 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>الديانة :</span>
                                    <span class="color_main">مسلم</span>
                                </div>
                                <div class="col-md-4 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>النوع :</span>
                                    <span class="color_main">ذكر</span>
                                </div>
                                <div class="col-md-4 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>الحالة الاجتماعية :</span>
                                    <span class="color_main">اعزب</span>
                                </div>
                            </div>
                            <div class="w-100 flex-wrap d-flex">
                                <div class="col-md-6 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>عدد سنوات الخبرة :</span>
                                    <span class="color_main">5 سنوات</span>
                                </div>
                                <div class="col-md-6 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>تاريخ الميلاد :</span>
                                    <span class="color_main">8 / 11 / 1994</span>
                                </div>
                            </div>
                            <div class="w-100 mb-3 col-md-12">
                                <span class="span_profile"><i class="fas fa-square ml-2"></i>العنوان :</span>
                                <span class="color_main">الدقهلية - شربين - الطريق السريع - امام كوبرى السلخانة</span>
                            </div>
                            <div class="w-100 flex-wrap d-flex">
                                <div class="col-md-4 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>المحافظة :</span>
                                    <span class="color_main">الدقهلية</span>
                                </div>
                                <div class="col-md-8 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>البريد الاكترونى :</span>
                                    <span class="color_main">mohamedelnagar147@example.com</span>
                                </div>
                            </div>
                            <div class="w-100 flex-wrap d-flex">
                                <div class="col-md-6 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>رقم التليفون :</span>
                                    <span class="color_main">0503920898</span>
                                </div>
                                <div class="col-md-6 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>رقم الموبايل :</span>
                                    <span class="color_main">201090789568+</span>
                                </div>
                            </div>
                            <div class="w-100 flex-wrap d-flex">
                                <div class="col-md-6 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>المهنة المتقدم اليها :</span>
                                    <span class="color_main">مهندس زراعى</span>
                                </div>
                                <div class="col-md-6 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>الراتب المتوقع :</span>
                                    <span class="color_main">900000000$</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 text-right mb-3">
                        <div class="w-100 color_main">
                            <div class="font-weight-bolder h5"><i class="fas fa-passport ml-2"></i>جواز السفر والخبرات الخارجية</div>
                            <hr class="color_main">
                        </div>
                        <div class="w-100">
                            <div class="w-100 flex-wrap d-flex">
                                <div class="col-md-6 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>رقم جواز السفر :</span>
                                    <span class="color_main">52362514</span>
                                </div>
                                <div class="col-md-6 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>المهنة بجواز السفر :</span>
                                    <span class="color_main">مهندس زراعى</span>
                                </div>
                            </div>
                            <div class="w-100 flex-wrap d-flex">
                                <div class="col-md-6 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>تاريخ الانتهاء :</span>
                                    <span class="color_main">8 / 5 / 2025</span>
                                </div>
                                <div class="col-md-6 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>هل سبق لك العمل بالخارج :</span>
                                    <span class="color_main">لا</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 text-right mb-3">
                        <div class="w-100 color_main">
                            <div class="font-weight-bolder h5"><i class="fas fa-id-badge ml-2"></i>بيانات رخصة القيادة</div>
                            <hr class="color_main">
                        </div>
                        <div class="w-100">
                            <div class="w-100 flex-wrap d-flex">
                                <div class="col-md-6 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>هل تجيد قيادة السيارة :</span>
                                    <span class="color_main">نعم</span>
                                </div>
                                <div class="col-md-6 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>نوع الرخصة :</span>
                                    <span class="color_main">خاصة</span>
                                </div>
                            </div>
                            <div class="w-100 flex-wrap d-flex">
                                <div class="col-md-6 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>تاريخ الانتهاء :</span>
                                    <span class="color_main">8 / 5 / 2025</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 text-right mb-3">
                        <div class="w-100 color_main">
                            <div class="font-weight-bolder h5"><i class="fas fa-key ml-2"></i>الرقم الوزارى</div>
                            <hr class="color_main">
                        </div>
                        <div class="w-100">
                            <div class="w-100 flex-wrap d-flex">
                                <div class="col-md-6 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>تاريخ الطلب :</span>
                                    <span class="color_main">8 / 5 / 2025</span>
                                </div>
                                <div class="col-md-6 mb-3 float-right">
                                    <span class="span_profile"><i class="fas fa-square ml-2"></i>رقم الطلب :</span>
                                    <span class="color_main">5236254125</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 text-right mb-3">
                        <div class="w-100 color_main">
                            <div class="font-weight-bolder h5"><i class="fas fa-graduation-cap ml-2"></i>المؤهلات العلمية</div>
                            <hr class="color_main">
                        </div>
                        <div class="w-100">
                            <div class="w-100 flex-wrap d-flex">
                                <div class="col-md-12 mb-3 float-right">
                                    <table class="table table-bordered table-striped table-hover text-center">
                                        <thead class="bg_main color-white">
                                            <tr>
                                                <th scope="col">الدرجة العلمية</th>
                                                <th scope="col">الكلية او المعهد</th>
                                                <th scope="col">الجامعة او الاكاديمية</th>
                                                <th scope="col">التقدير</th>
                                                <th scope="col">تاريخ التخرج</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="font-weight-normal" scope="row">بكاليريوس</th>
                                                <td>كلية زراعة</td>
                                                <td>جامعة المنصورة</td>
                                                <td>جيد جدا</td>
                                                <td>2017</td>
                                            </tr>
                                            <tr>
                                                <th class="font-weight-normal" scope="row">ماجستير</th>
                                                <td>كلية الهندسة</td>
                                                <td>جامعة دمياط</td>
                                                <td>امتياز</td>
                                                <td>2017</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 text-right mb-3">
                        <div class="w-100 color_main">
                            <div class="font-weight-bolder h5"><i class="fas fa-briefcase ml-2"></i>خبرات العمل</div>
                            <hr class="color_main">
                        </div>
                        <div class="w-100">
                            <div class="w-100 flex-wrap d-flex">
                                <div class="col-md-12 mb-3 float-right">
                                    <table class="table table-bordered table-striped table-hover text-center">
                                        <thead class="bg_main color-white">
                                            <tr>
                                                <th scope="col">اسم الشركة</th>
                                                <th scope="col" colspan="2">سنوات الخبرة</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="font-weight-normal" scope="row">شركة الاستشارية المتقدمة لنظم المعلومات</th>
                                                <td>2016</td>
                                                <td>2017</td>
                                            </tr>
                                            <tr>
                                                <th class="font-weight-normal" scope="row">شركة رواد التكنولوجيا للتوريدات العامة والانظمة الامنية</th>
                                                <td>2017</td>
                                                <td>2018</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 text-right mb-3">
                        <div class="w-100 color_main">
                            <div class="font-weight-bolder h5"><i class="fas fa-globe ml-2"></i>اللغات</div>
                            <hr class="color_main">
                        </div>
                        <div class="w-100">
                            <div class="w-100 flex-wrap d-flex">
                                <div class="col-md-12 mb-3 float-right">
                                    <table class="table table-bordered table-striped table-hover text-center">
                                        <thead class="bg_main color-white">
                                            <tr>
                                                <th scope="col">اللغات</th>
                                                <th scope="col" colspan="3">درجة اجادة اللغة</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="font-weight-normal" scope="row">اللغة العربية</th>
                                                <td>قراءة : جيد جدا</td>
                                                <td>كتابة : جيد جدا</td>
                                                <td>فهم : جيد جدا</td>
                                            </tr>
                                            <tr>
                                                <th class="font-weight-normal" scope="row">اللغة الانجليزية</th>
                                                <td>قراءة : جيد جدا</td>
                                                <td>كتابة : جيد جدا</td>
                                                <td>فهم : جيد</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 text-right mb-3">
                        <div class="w-100 color_main">
                            <div class="font-weight-bolder h5"><i class="fab fa-leanpub ml-2"></i>الدورات التدريبية</div>
                            <hr class="color_main">
                        </div>
                        <div class="w-100">
                            <div class="w-100 flex-wrap d-flex">
                                <div class="col-md-12 mb-3 float-right">
                                    <table class="table table-bordered table-striped table-hover text-center">
                                        <thead class="bg_main color-white">
                                            <tr>
                                                <th scope="col">الدورات التدريبية</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="font-weight-normal" scope="row">دورة ICDL</th>
                                            </tr>
                                            <tr>
                                                <th class="font-weight-normal" scope="row">دورة تصميم وتطوير المواقع</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 text-right mb-3">
                        <div class="w-100 color_main">
                            <div class="font-weight-bolder h5"><i class="fas fa-file ml-2"></i>الملفات</div>
                            <hr class="color_main">
                        </div>
                        <div class="w-100">
                            <div class="w-100 flex-wrap d-flex">
                                <div class="col-md-12 mb-3 float-right">
                                    <div class="w-100 text-center font_link">
                                        <div class="col-5 float-right text-left">
                                            <a class="" href="">
                                                <i class="fas fa-file-word color_main font_size_cv_i"></i>
                                                <span class="cv_color d-block ml-1">CV</span>
                                            </a>
                                        </div>
                                        <div class="col-5 float-right">
                                            <span class="float-right span_file">ملف يحتوى على جميع بياناتى الشخصية</span>
                                        </div>
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