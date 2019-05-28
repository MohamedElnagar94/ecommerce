@extends('agency.includes_agency.index')
@section('title','شركة رمضان')
@section('content')
    <!-- ================ start about us ========================== -->
    <section class="container-fluid" id="about-us">
        <div class="container">
            <div class="row text-center pt-5 pb-5 pl-3 pr-3">
                <h1 class="text-center d-block w-100 h1_about position-relative mb-5">اهلا بكم فى شركة رمضان</h1>
                <h5 class="text-center d-block w-100 mb-4">لا أحد يحب الألم بذاته، يسعى ورائه أو يبتغيه، ببساطة لأنه الألم... </h5>
                <p class="paragraph_about">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. </p>
                <p class="paragraph_about">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. </p>
            </div>
        </div>
    </section>
    <!-- ================ end about us ========================== -->
    <!-- ================ start services ========================== -->
    <section class="container-fluid" id="services">
        <div class="container">
            <div class="row text-center pt-5 pb-5 pl-3 pr-3">
                <h2 class="text-center d-block w-100 h1 h2_services position-relative mb-5">خدماتنا</h2>
                <div class="col-md-3">
                    <div>
                        <div class="img_services mb-3">
                            <img class="img-fluid" src="{{url('/')}}/storage/agency/images/services1.png" alt="">
                        </div>
                        <h5 class="h5_services">دردشة مباشرة</h5>
                        <div class="height_paragraph_services">
                            <p class="paragraph_services">موظفونا جاهزون للإجابة على أسئلتكم.</p>
                        </div>
                        <h6 class="h6_services_button">الدردشة معنا الآن</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <div class="img_services mb-3">
                            <img class="img-fluid" src="{{url('/')}}/storage/agency/images/services2.png" alt="">
                        </div>
                        <h5 class="h5_services">طلب القوى العاملة</h5>
                        <div class="height_paragraph_services">
                            <p class="paragraph_services">أرسل لنا طلبات القوى العاملة الخاصة بك. نحن هنا لخدمتك.</p>
                        </div>
                        <h6 class="h6_services_button">اطلب الآن</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <div class="img_services mb-3">
                            <img class="img-fluid" src="{{url('/')}}/storage/agency/images/services3.png" alt="">
                        </div>
                        <h5 class="h5_services">سوق الوظائف</h5>
                        <div class="height_paragraph_services">
                            <p class="paragraph_services">معرفة المزيد عن سوق العمل المصرى. جميع المعلومات التي ستحتاجها على الإطلاق!</p>
                        </div>
                        <h6 class="h6_services_button">أعرف أكثر</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <div class="img_services mb-3">
                            <img class="img-fluid" src="{{url('/')}}/storage/agency/images/services4.png" alt="">
                        </div>
                        <h5 class="h5_services">يقدم طلب على الإنترنت</h5>
                        <div class="height_paragraph_services">
                            <p class="paragraph_services">الآلاف من فرص العمل المتاحة. الرجاء الضغط هنا للتقديم عبر الإنترنت.</p>
                        </div>
                        <h6 class="h6_services_button">قدم الآن</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ end services ========================== -->
    <!-- ================ start jobs ========================== -->
    <section class="container-fluid">
        <div class="background_color_job position-relative">
            <div class="background_img_job">
                <div class="all_jobs">
                    <div class="container">
                        <div class="row text-center pt-5 pb-5 pl-3 pr-3">
                            <h2 class="text-center d-block w-100 h1 h2_jobs position-relative mb-5">فرص العمل</h2>
                            <div class="w-100 mb-3">
                                <div class="col-md-6 float-right link_job">
                                    <a href="">
                                        <div class="col-md-10 job_kind_right">
                                            <h5 class="h5_job_kind">عامل مصنع .....</h5>
                                            <p>تايوان</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 float-right link_job">
                                    <a href="">
                                        <div class="col-md-10 job_kind_left">
                                            <h5 class="h5_job_kind">عامل مصنع .....</h5>
                                            <p>تايوان</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="w-100 mb-3">
                                <div class="col-md-6 float-right link_job">
                                    <a href="">
                                        <div class="col-md-10 job_kind_right">
                                            <h5 class="h5_job_kind">عامل مصنع .....</h5>
                                            <p>تايوان</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 float-right link_job">
                                    <a href="">
                                        <div class="col-md-10 job_kind_left">
                                            <h5 class="h5_job_kind">عامل مصنع .....</h5>
                                            <p>تايوان</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="w-100 mb-3">
                                <div class="col-md-6 float-right link_job">
                                    <a href="">
                                        <div class="col-md-10 job_kind_right">
                                            <h5 class="h5_job_kind">عامل مصنع .....</h5>
                                            <p>تايوان</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 float-right link_job">
                                    <a href="">
                                        <div class="col-md-10 job_kind_left">
                                            <h5 class="h5_job_kind">عامل مصنع .....</h5>
                                            <p>تايوان</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="w-100 mt-4">
                                <button class="button_job_view">عرض كل الوظائف</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ end jobs ========================== -->
    <!-- ================ start interview ========================== -->
    <section class="container-fluid">
        <div class="container">
            <div class="row text-center pt-5 pb-5 pl-3 pr-3">
                <h2 class="text-center d-block w-100 h1 h2_services position-relative mb-5">نصائح المقابلة</h2>
                <div class="col-lg-10 m-0 m-auto">
                    <div class="all_interview_tips">
                        <div class="row question_shadow mb-3">
                            <div class="interview_question">
                                <span class="float-right h4 question_span col-lg-1 col-1">س</span>
                                <h5 class="float-right m-0 question_h5 col-lg-11 col-11 text-right">لماذا ترغب فى هذه الوظيفة؟</h5>
                            </div>
                            <aside class="interview_answer active">
                                <span class="float-right h4 answer_span col-lg-1 col-1">ج</span>
                                <p class="float-right m-0 answer_para text-right col-11 col-lg-11">هذه فرصتك المثالية لأن تٌريهم أنك تملك مجموعة المهارات التى يطلبونها.عليك أن تٌعلّمهم أن ما تملكه من معرفة و تجارب سيعود بالنفع على الشركة إن كانت الوظيفة من نصيبك ، و كيف أن خبراتك تؤكد كلماتك.عليك أيضاً أن تخبرهم عن فهمك لطبيعة الوظيفة و متطلباتها.بقيامك بهذا ستصلهم رسالة بأنك قد قمت بواجبك المنزلى من البحث الجيد و تبيّن لهم أنك مهتم بالفعل بهذه الوظيفة.</p>
                            </aside>
                            <div class="interview_hide">
                                <div class="hide_all">
                                    <div class="float-right arrow_color_i">
                                        <i class="fas fa-chevron-up"></i>                                    
                                    </div>
                                    <div class="col-11 float-right">
                                        <span class="float-right m-0 hide_question text-right">
                                            <span class="show_question_answer">اخفاء</span> الاجابة
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row question_shadow mb-3">
                            <div class="interview_question">
                                <span class="float-right h4 question_span col-lg-1 col-1">س</span>
                                <h5 class="float-right m-0 question_h5 col-lg-11 col-11 text-right">لماذا ترغب فى هذه الوظيفة؟</h5>
                            </div>
                            <aside class="interview_answer notactive">
                                <span class="float-right h4 answer_span col-lg-1 col-1">ج</span>
                                <p class="float-right m-0 answer_para text-right col-11 col-lg-11">هذه فرصتك المثالية لأن تٌريهم أنك تملك مجموعة المهارات التى يطلبونها.عليك أن تٌعلّمهم أن ما تملكه من معرفة و تجارب سيعود بالنفع على الشركة إن كانت الوظيفة من نصيبك ، و كيف أن خبراتك تؤكد كلماتك.عليك أيضاً أن تخبرهم عن فهمك لطبيعة الوظيفة و متطلباتها.بقيامك بهذا ستصلهم رسالة بأنك قد قمت بواجبك المنزلى من البحث الجيد و تبيّن لهم أنك مهتم بالفعل بهذه الوظيفة.</p>
                            </aside>
                            <div class="interview_hide">
                                <div class="hide_all">
                                    <div class="float-right arrow_color_i">
                                        <i class="fas fa-chevron-down"></i>                                    
                                    </div>
                                    <div class="col-11 float-right">
                                        <span class="float-right m-0 hide_question text-right">
                                            <span class="show_question_answer">اظهار</span> الاجابة
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row question_shadow mb-3">
                            <div class="interview_question">
                                <span class="float-right h4 question_span col-lg-1 col-1">س</span>
                                <h5 class="float-right m-0 question_h5 col-lg-11 col-11 text-right">لماذا ترغب فى هذه الوظيفة؟</h5>
                            </div>
                            <aside class="interview_answer notactive">
                                <span class="float-right h4 answer_span col-lg-1 col-1">ج</span>
                                <p class="float-right m-0 answer_para text-right col-11 col-lg-11">هذه فرصتك المثالية لأن تٌريهم أنك تملك مجموعة المهارات التى يطلبونها.عليك أن تٌعلّمهم أن ما تملكه من معرفة و تجارب سيعود بالنفع على الشركة إن كانت الوظيفة من نصيبك ، و كيف أن خبراتك تؤكد كلماتك.عليك أيضاً أن تخبرهم عن فهمك لطبيعة الوظيفة و متطلباتها.بقيامك بهذا ستصلهم رسالة بأنك قد قمت بواجبك المنزلى من البحث الجيد و تبيّن لهم أنك مهتم بالفعل بهذه الوظيفة.</p>
                            </aside>
                            <div class="interview_hide">
                                <div class="hide_all">
                                    <div class="float-right arrow_color_i">
                                        <i class="fas fa-chevron-down"></i>                                    
                                    </div>
                                    <div class="col-11 float-right">
                                        <span class="float-right m-0 hide_question text-right">
                                            <span class="show_question_answer">اظهار</span> الاجابة
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row question_shadow mb-3">
                            <div class="interview_question">
                                <span class="float-right h4 question_span col-lg-1 col-1">س</span>
                                <h5 class="float-right m-0 question_h5 col-lg-11 col-11 text-right">لماذا ترغب فى هذه الوظيفة؟</h5>
                            </div>
                            <aside class="interview_answer notactive">
                                <span class="float-right h4 answer_span col-lg-1 col-1">ج</span>
                                <p class="float-right m-0 answer_para text-right col-11 col-lg-11">هذه فرصتك المثالية لأن تٌريهم أنك تملك مجموعة المهارات التى يطلبونها.عليك أن تٌعلّمهم أن ما تملكه من معرفة و تجارب سيعود بالنفع على الشركة إن كانت الوظيفة من نصيبك ، و كيف أن خبراتك تؤكد كلماتك.عليك أيضاً أن تخبرهم عن فهمك لطبيعة الوظيفة و متطلباتها.بقيامك بهذا ستصلهم رسالة بأنك قد قمت بواجبك المنزلى من البحث الجيد و تبيّن لهم أنك مهتم بالفعل بهذه الوظيفة.</p>
                            </aside>
                            <div class="interview_hide">
                                <div class="hide_all">
                                    <div class="float-right arrow_color_i">
                                        <i class="fas fa-chevron-down"></i>                                    
                                    </div>
                                    <div class="col-11 float-right">
                                        <span class="float-right m-0 hide_question text-right">
                                            <span class="show_question_answer">اظهار</span> الاجابة
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ end interview ========================== -->
    <!-- ================ start news ========================== -->
    <section class="container-fluid nnnnews">
        <div class="container">
            <div class="row text-center pt-3 pb-3 pl-3 pr-3">
                <h2 class="text-center d-block w-100 h1 h2_services position-relative mb-5">اخر الاخبار</h2>
                <div class="row">
                    <div class="col-12 col-md-12 col-sm-12 col-lg-6">
                        <div class="right_side w-100 mb-2 float-right news_title" data-news="news1">
                            <div class=" float-right text-right news_active">
                                <aside class="row some_news active">
                                    <div class="col-md-12 mb-2">
                                        <h5 class="font-weight-bold">بيان من الخارجية بشأن العمالة في الأردن</h5>
                                    </div>
                                    <div class="w-100">
                                        <div class="float-right col-md-3">
                                            <i class="fas fa-user"></i>
                                            <span>محمد</span>
                                        </div>
                                        <div class="float-right col-md-4">
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>14 نوفمبر 2017</span>
                                        </div>
                                        <div class="float-right col-md-5">
                                            <i class="fas fa-comments"></i>
                                            <span>14 تعليق</span>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                        <div class="right_side w-100 mb-2 float-right news_title" data-news="news2">
                            <div class="float-right text-right news_active">
                                <aside class="row some_news">
                                    <div class="col-md-12 mb-2">
                                        <h5 class="font-weight-bold">بيان من الخارجية بشأن العمالة في الأردن</h5>
                                    </div>
                                    <div class="w-100">
                                        <div class="float-right col-md-3">
                                            <i class="fas fa-user"></i>
                                            <span>محمد</span>
                                        </div>
                                        <div class="float-right col-md-4">
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>14 نوفمبر 2017</span>
                                        </div>
                                        <div class="float-right col-md-5">
                                            <i class="fas fa-comments"></i>
                                            <span>14 تعليق</span>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                        <div class="right_side w-100 mb-2 float-right news_title" data-news="news3">
                            <div class="float-right text-right news_active">
                                <aside class="row some_news">
                                    <div class="col-md-12 mb-2">
                                        <h5 class="font-weight-bold">بيان من الخارجية بشأن العمالة في الأردن</h5>
                                    </div>
                                    <div class="w-100">
                                        <div class="float-right col-md-3">
                                            <i class="fas fa-user"></i>
                                            <span>محمد</span>
                                        </div>
                                        <div class="float-right col-md-4">
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>14 نوفمبر 2017</span>
                                        </div>
                                        <div class="float-right col-md-5">
                                            <i class="fas fa-comments"></i>
                                            <span>14 تعليق</span>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                        <div class="right_side w-100 mb-2 float-right news_title" data-news="news4">
                            <div class=" float-right text-right news_active">
                                <aside class="row some_news">
                                    <div class="col-md-12 mb-2">
                                        <h5 class="font-weight-bold">بيان من الخارجية بشأن العمالة في الأردن</h5>
                                    </div>
                                    <div class="w-100">
                                        <div class="float-right col-md-3">
                                            <i class="fas fa-user"></i>
                                            <span>محمد</span>
                                        </div>
                                        <div class="float-right col-md-4">
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>14 نوفمبر 2017</span>
                                        </div>
                                        <div class="float-right col-md-5">
                                            <i class="fas fa-comments"></i>
                                            <span>14 تعليق</span>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                        <div class="right_side w-100 mb-2 float-right news_title" data-news="news5">
                            <div class=" float-right text-right news_active">
                                <aside class="row some_news">
                                    <div class="col-md-12 mb-2">
                                        <h5 class="font-weight-bold">بيان من الخارجية بشأن العمالة في الأردن</h5>
                                    </div>
                                    <div class="w-100">
                                        <div class="float-right col-md-3">
                                            <i class="fas fa-user"></i>
                                            <span>محمد</span>
                                        </div>
                                        <div class="float-right col-md-4">
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>14 نوفمبر 2017</span>
                                        </div>
                                        <div class="float-right col-md-5">
                                            <i class="fas fa-comments"></i>
                                            <span>14 تعليق</span>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 col-lg-6">
                        <div class="left_side w-100 news_block" id="news1">
                            <div class="float-right image_news">
                                <img class="img-fluid w-100 image_news_view" src="{{url('/')}}/storage/agency/images/news1.jpg" alt="">
                            </div>
                            <div class="position-relative news_details">
                                <div class="row w-100 ml-0 mr-0 position-absolute news_detail_words">
                                    <div class="news_head_para_send">
                                        <div class="news_head_person mb-2">
                                            <div class="col-md-12 mb-2">
                                                <h5 class="font-weight-bold h5_font_news">بيان من الخارجية بشأن العمالة في الأردن</h5>
                                            </div>
                                            <div class="w-100 person_news">
                                                <div class="float-right col-md-3">
                                                    <i class="fas fa-user"></i>
                                                    <span>محمد</span>
                                                </div>
                                                <div class="float-right col-md-4">
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <span>14 نوفمبر 2017</span>
                                                </div>
                                                <div class="float-right col-md-3">
                                                    <i class="fas fa-comments"></i>
                                                    <span>14 تعليق</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-right para_news">
                                            <p class="overflow-hidden w-100 para_height">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. </p>
                                        </div>
                                        <div class="d-block w-100 col-md-12 text-right mb-2">
                                            <button class="border-0 button_news">مواصلة القراءة</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="left_side w-100 news_block" id="news2">
                            <div class="float-right image_news">
                                <img class="img-fluid w-100 image_news_view" src="{{url('/')}}/storage/agency/images/news2.png" alt="">
                            </div>
                            <div class="position-relative news_details">
                                <div class="row w-100 ml-0 mr-0 position-absolute news_detail_words">
                                    <div class="news_head_para_send">
                                        <div class="news_head_person mb-2">
                                            <div class="col-md-12 mb-2">
                                                <h5 class="font-weight-bold h5_font_news">بيان من الخارجية بشأن العمالة في الأردن</h5>
                                            </div>
                                            <div class="w-100 person_news">
                                                <div class="float-right col-md-3">
                                                    <i class="fas fa-user"></i>
                                                    <span>محمد</span>
                                                </div>
                                                <div class="float-right col-md-4">
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <span>14 نوفمبر 2017</span>
                                                </div>
                                                <div class="float-right col-md-3">
                                                    <i class="fas fa-comments"></i>
                                                    <span>14 تعليق</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-right para_news">
                                            <p class="overflow-hidden w-100 para_height">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. </p>
                                        </div>
                                        <div class="d-block w-100 col-md-12 text-right mb-2">
                                            <button class="border-0 button_news">مواصلة القراءة</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="left_side w-100 news_block" id="news3">
                            <div class="float-right image_news">
                                <img class="img-fluid w-100 image_news_view" src="{{url('/')}}/storage/agency/images/news3.png" alt="">
                            </div>
                            <div class="position-relative news_details">
                                <div class="row w-100 ml-0 mr-0 position-absolute news_detail_words">
                                    <div class="news_head_para_send">
                                        <div class="news_head_person mb-2">
                                            <div class="col-md-12 mb-2">
                                                <h5 class="font-weight-bold h5_font_news">بيان من الخارجية بشأن العمالة في الأردن</h5>
                                            </div>
                                            <div class="w-100 person_news">
                                                <div class="float-right col-md-3">
                                                    <i class="fas fa-user"></i>
                                                    <span>محمد</span>
                                                </div>
                                                <div class="float-right col-md-4">
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <span>14 نوفمبر 2017</span>
                                                </div>
                                                <div class="float-right col-md-3">
                                                    <i class="fas fa-comments"></i>
                                                    <span>14 تعليق</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-right para_news">
                                            <p class="overflow-hidden w-100 para_height">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. </p>
                                        </div>
                                        <div class="d-block w-100 col-md-12 text-right mb-2">
                                            <button class="border-0 button_news">مواصلة القراءة</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="left_side w-100 news_block" id="news4">
                            <div class="float-right image_news">
                                <img class="img-fluid w-100 image_news_view" src="{{url('/')}}/storage/agency/images/news4.jpg" alt="">
                            </div>
                            <div class="position-relative news_details">
                                <div class="row w-100 ml-0 mr-0 position-absolute news_detail_words">
                                    <div class="news_head_para_send">
                                        <div class="news_head_person mb-2">
                                            <div class="col-md-12 mb-2">
                                                <h5 class="font-weight-bold h5_font_news">بيان من الخارجية بشأن العمالة في الأردن</h5>
                                            </div>
                                            <div class="w-100 person_news">
                                                <div class="float-right col-md-3">
                                                    <i class="fas fa-user"></i>
                                                    <span>محمد</span>
                                                </div>
                                                <div class="float-right col-md-4">
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <span>14 نوفمبر 2017</span>
                                                </div>
                                                <div class="float-right col-md-3">
                                                    <i class="fas fa-comments"></i>
                                                    <span>14 تعليق</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-right para_news">
                                            <p class="overflow-hidden w-100 para_height">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. </p>
                                        </div>
                                        <div class="d-block w-100 col-md-12 text-right mb-2">
                                            <button class="border-0 button_news">مواصلة القراءة</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="left_side w-100 news_block" id="news5">
                            <div class="float-right image_news">
                                <img class="img-fluid w-100 image_news_view" src="{{url('/')}}/storage/agency/images/news5.jpg" alt="">
                            </div>
                            <div class="position-relative news_details">
                                <div class="row w-100 ml-0 mr-0 position-absolute news_detail_words">
                                    <div class="news_head_para_send">
                                        <div class="news_head_person mb-2">
                                            <div class="col-md-12 mb-2">
                                                <h5 class="font-weight-bold h5_font_news">بيان من الخارجية بشأن العمالة في الأردن</h5>
                                            </div>
                                            <div class="w-100 person_news">
                                                <div class="float-right col-md-3">
                                                    <i class="fas fa-user"></i>
                                                    <span>محمد</span>
                                                </div>
                                                <div class="float-right col-md-4">
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <span>14 نوفمبر 2017</span>
                                                </div>
                                                <div class="float-right col-md-3">
                                                    <i class="fas fa-comments"></i>
                                                    <span>14 تعليق</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-right para_news">
                                            <p class="overflow-hidden w-100 para_height">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. </p>
                                        </div>
                                        <div class="d-block w-100 col-md-12 text-right mb-2">
                                            <button class="border-0 button_news">مواصلة القراءة</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ end news ========================== -->
@endsection