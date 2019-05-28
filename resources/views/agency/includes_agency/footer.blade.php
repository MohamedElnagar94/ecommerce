    <!-- ================ start special job ========================== -->
    <section class="container-fluid">
        <div class="contact_background">
            <div class="contact_layer"></div>
            <div class="container">
                <div class="row pt-5 pb-5 text-center">
                    <div class="w-100 col-md-12 mb-5">
                        <h2 class="h1 head_contact_us">العثور على الوظيفة المثالية بالنسبة لك</h2>
                    </div>
                    <div class="w-100 col-md-12">
                        <a href="{{route('contactUs.index')}}" class="button_contact_us_view">تواصل معنا</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ end special job ========================== -->
    <!-- ================ start footer ========================== -->
    <footer class="container-fluid background_footer">
        <div class="container">
            <div class="row">
                <div class="w-100 pt-1 pb-5">
                    <div class="col-md-4 float-right color-white pt-4">
                        <div class="w-100 mb-2">تواصل معنا</div>
                        <div class="w-100 mb-4">الحصول على آخر التحديثات.</div>
                        <div class="w-100 d-flex justify-content-between align-items-center social_media_padding">
                            <div class="border-radius-50 facebook_color float-right social_media"><i class="fab fa-facebook-f"></i></div>
                            <div class="border-radius-50 twitter_color float-right social_media"><i class="fab fa-twitter"></i></div>
                            <div class="border-radius-50 linked_color float-right social_media"><i class="fab fa-linkedin-in"></i></div>
                            <div class="border-radius-50 instegram_color float-right social_media"><i class="fab fa-instagram"></i></div>
                            <div class="border-radius-50 youtube_color float-right social_media"><i class="fab fa-youtube"></i></div>
                        </div>
                    </div>
                    <div class="col-md-4 float-right color-white pt-4">
                        <div class="w-100 mb-2">انضم إلى النشرة الإخبارية</div>
                        <div class="w-100 mb-4">يحدث الإبداع في كل مكان.</div>
                        <form class="">
                            <input class="form-control text-right float-right email_direction mb-3" type="email" value="" placeholder="ادخل اميلك ......." name="" id="">
                            <input class="button_email" type="submit" value="الاشتراك">
                        </form>
                    </div>
                    <div class="col-md-4 float-right color-white pt-4">
                        <div class="w-100 mb-2">ما هو مؤتمر الأعمال</div>
                        <div class="w-100 mb-4">
                            <p class="footer_para">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. </p>
                        </div>
                    </div>
                </div>
                <hr class="head_footer">
                <div class="w-100 text-center mb-2">
                    <h6 class="color-white">كل الحقوق محفوظة © لشركة رمضان لالحاق العمالة بالخارج</h6>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================ end footer ========================== -->
    <!-- https://jquery.com/ -->
    <!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- https://getbootstrap.com/ -->
    <script src="{{url('/')}}/agency/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('/')}}/agency/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    
    
    <!-- https://michalsnik.github.io/aos/ -> ( for scroll animation ) -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- http://www.jasonlusk.com/scroll/ -> ( for scroll animation ) -->
    <script src="{{url('/')}}/agency/js/animate-scroll.js"></script>

    <!-- http://hernansartorio.com/jquery-nice-select/ -> ( for nice select ) -->
    <script src="{{url('/')}}/agency/js/jquery.js"></script> 
    <script src="{{url('/')}}/agency/js/jquery.nice-select.min.js"></script>
    <script src="{{url('/')}}/agency/js/main.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>