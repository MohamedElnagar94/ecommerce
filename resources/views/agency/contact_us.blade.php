@extends('agency.includes_agency.index')
@section('title','تواصل معنا')
@section('heading','تواصل معنا')
@section('content')
    <!-- ================ start contact us ========================== -->
    <section class="container-fluid">
        <div class="container">
            <div class="row text-center pt-5 pb-3 pl-3 pr-3">
                <h2 class="text-center d-block w-100 h1 h2_services position-relative mb-4">تواصل معنا</h2>
                <h5 class="text-center d-block w-100 mb-4 time_clock">لا أحد يحب الألم بذاته، يسعى ورائه أو يبتغيه، ببساطة لأنه الألم</h5>
                <div class="col-md-4 hr-left-vertical">
                    <div>
                        <div class="mb-3 div-i-contact">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <h5 class="h5_contact-us">الاميل</h5>
                        <p class="p-contact-us">info@example.com</p>
                    </div>
                </div>
                <div class="col-md-4 hr-left-vertical">
                    <div>
                        <div class="mb-3 div-i-contact">
                            <i class="fa fa-phone"></i>
                        </div>
                        <h5 class="h5_contact-us">رقم الموبايل</h5>
                        <p class="p-contact-us">+1 -8587-879-8965</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <div class="mb-3 div-i-contact">
                            <i class="fa fa-map-marker-alt"></i>
                        </div>
                        <h5 class="h5_contact-us">العنوان</h5>
                        <p class="p-contact-us">14 شارع عمر الفاروق تقسيم سامية الجمل</p>
                    </div>
                </div>
            </div>
            <form>
                <div class="row text-center pb-5 pl-3 pr-3 form-contact-us">
                    <div class="col-md-6">
                            <input class="form-control" type="text" placeholder="ادخل اسمك">
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="text" placeholder="ادخل اميلك">
                        </div>
                        <div class="col-md-12">
                            <input class="form-control" type="text" placeholder="عنوان الرسالة">
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" placeholder="الرسالة"></textarea>
                        </div>
                        <div class="col-md-12">
                            <input class="" type="submit" value="ارسال">
                        </div>
                </div>
            </form>
        </div>
    </section>
    <!-- ================ end contact us ========================== -->
@endsection