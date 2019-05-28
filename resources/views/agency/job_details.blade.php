@extends('agency.includes_agency.index')
@section('title','تفاصيل الوظيفة')
@section('heading','تفاصيل الوظيفة')
@section('content')
    <!-- ================ start jobs details ========================== -->
    <section class="container-fluid">
        <div class="container">
            
            <div class="row pt-3 pl-3 pr-3 mt-4 mb-1 div-job-details">
                <div class="col-md-12">
                    <h4>الوظيفة: مندوب بيع خدمات ماليه - الامارات</h4> 
                </div>

                <div class="col-6">
                    <ul class="ul-job-details ">
                        <li>اسم الشركة : <span>شركة رمضان</span></li>
                        <li>مقر العمل : <span>الامارات</span></li>
                        <li>العمالة المطلوبة : <span>20</span></li>
                        <li>تاريخ الاعلان : <span>منذ 7 ايام</span></li>
                    </ul>
                </div>

                <div class="col-6">
                    <img class="img-fluid w-img-40 float-left" src="{{url('/')}}/storage/agency/images/logo.png" alt="">
                </div>
                
                <hr>
                <div class="col-md-12">
                    <button class="col-md-2 btn-span mt-3">التقدم للوظيفة</button>
                    <div class="col-md-2 text-center div-3-span pt-2 pb-3">
                        <span>63</span>
                        <br>
                        <span>متقدمين</span>
                    </div>
                    
                    <div class="col-md-4 text-center div-3-span pt-2 pb-3">
                        <span>5</span>
                        <br>
                        <span>تم مشاهدتهم</span>
                    </div>
                </div>
            </div>

            <div class="row pt-3 pb-3 pl-3 pr-3 mt-2 mb-1 div-job-details">
                <div class="col-md-12">
                    <h4>متطلبات الوظيفة</h4> 
                </div>

                <ul class="pr-3 pl-3 ul-job-details col-md-12 row">
                    <li class="col-md-6">سنوات الخبرة : <span>0 - 3 سنين خبرة</span></li>
                    <li class="col-md-6">اللغة الانجليزية : <span>لا يشترط</span></li>
                    <li class="col-md-6">رخصة قيادة : <span>نعم - خاصة</span></li>
                    <li class="col-md-6">السن المطلوب : <span>22 - 30 سنة</span></li>
                    <li class="col-md-6">رخصة دراجة نارية : <span>نعم ولدية دراجة نارية</span></li>  
                    <li class="col-md-6">الحاسب الالى : <span>أساسيات</span></li>
                    <li class="col-md-6">الجنس المطلوب : <span>ذكر</span></li>
                    <li class="col-md-6">المؤهل المطلوب : <span>مؤهل عالى</span></li>
                    <li class="col-md-6">مايكروسوفت أوفيس : <span>أساسيات</span></li>                  
                </ul>
                
            </div>

            <div class="row pt-3 pb-3 pl-3 pr-3 mt-2 mb-1 div-job-details">
                <div class="col-md-12">
                    <h4>الراتب ونوع العمل</h4> 
                </div>

                <ul class="pr-3 pl-3 ul-job-details col-md-12 row">
                    <li class="col-md-6">الراتب الاساسى : <span>قابل للتفاوض</span></li>
                    <li class="col-md-6">نوع الوظيفة : <span>دوام كامل</span></li>
                    <li class="col-md-6">الحوافز الاضافية : <span>2000 - 4000 ريال</span></li>
                </ul>
                
            </div>

            <div class="row pt-3 pb-3 pl-3 pr-3 mt-2 mb-1 div-job-details">
                <div class="col-md-12">
                    <h4>مميزات الوظيفة</h4> 
                </div>

                <ul class="pr-3 pl-3 ul-job-details col-md-12 row">
                    <li class="col-md-6">تأمينات صحية</li>
                    <li class="col-md-6">تأمينات اجتماعية</li>
                </ul>
                
            </div>

            <div class="row pt-3 pl-3 pr-3 mt-2 mb-4 div-job-details">
                <div class="col-md-12">
                    <h4>تفاصيل الوظيفة</h4> 
                </div>

                <ul class="pr-3 pl-3 ul-job-details col-md-12 row">
                    <li class="col-md-6">مجال الوظيفة : <span>تسويق ومبيعات</span></li>
                    <li class="col-md-6">تخصص الوظيفة : <span>مبيعات خارجية وتوزيع</span></li> 
                </ul>
                
                <div class="col-md-12 div-chevron-left">
                    <span>طبيعة العمل :</span>
                    <p>مسئول عن فتح حسابات جديده لخدمة الخدمات المدفوعه المسهله وكل ما يتعلق بمتابعة العملاء وحل مشاكلهم .</p>
                    <p>فتح سوق مع عملاء جدد .</p>
                </div>

                <div class="col-md-12 div-chevron-left">
                    <span>المتطلبات :</span>
                    <p>يشترط وجود وسيله انتقال (سيارة او دراجة نارية)  في بعض المناطق .</p>
                </div>
                
            </div>
   
        </div>
    </section>
    <!-- ================ end jobs details ========================== -->
@endsection