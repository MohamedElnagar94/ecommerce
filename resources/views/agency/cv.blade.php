@extends('agency.includes_agency.index')
@section('title','CV')
@section('heading','تسجيل السيرة الذاتية')
@section('content')
    <!-- ================ start cv ========================== -->
    <section class="container-fluid cvv">
        <div class="container">
            <form>
                <div class="row text-center pt-5 pb-3 pl-3 pr-3">
                    <h2 class="text-center d-block w-100 h1 h2_services position-relative mb-4">السيرة الذاتية</h2>
                    <h5 class="text-center d-block w-100 mb-4 time_clock">حاول بقدر الإمكان إستكمال أكبر قدر من البيانات لتكون لديك فرص أفضل للعمل</h5>    
                </div>

                <div class="row pb-3 pl-3 pr-3 form-cv">
                    <div class="col-md-12">
                        <label>الاسم بالكامل</label>
                        <input class="form-control" type="text" placeholder="اكتب اسمك بالكامل">
                    </div>
                    <div class="col-md-6">
                        <label>الوطيفة</label>
                        <select class="form-control">
                            <option>اختر الوظيفه</option>
                            <option>0100</option>
                            <option>0020</option>
                            <option>0030</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>التخصص</label>
                        <select class="form-control">
                            <option>اختر التخصص</option>
                            <option>0100</option>
                            <option>0020</option>
                            <option>0030</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label>وصف الوضيفة</label>
                        <input class="form-control" type="text" placeholder="اكتب وصف الوظيفة">
                    </div>
                    <div class="col-md-4">
                        <label>الديانة</label>
                        <select class="form-control">
                            <option>اختر الديانة</option>
                            <option>الاسلام</option>
                            <option>المسيحية</option>
                            <option>اخرى</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>النوع</label>
                        <select class="form-control">
                            <option>اختر النوع</option>
                            <option>ذكر</option>
                            <option>انثى</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>الحالة الاجتماعية</label>
                        <select class="form-control">
                            <option>اختر الحالة الاجتماعية</option>
                            <option>اعزب</option>
                            <option>متزوج</option>
                            <option>مطلق</option>
                            <option>ارمل</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>عدد سنوات الخبرة</label>
                        <input class="form-control" type="text" placeholder="اكتب عدد سنوات الخبرة">
                    </div>
                    <div class="col-md-8">
                        <label>تاريخ الميلاد</label>
                        <input class="form-control" type="text" onfocus="(this.type='date')" onfocusout="(this.type='text')" placeholder="اختر تاريخ الميلاد">
                    </div>
                    <div class="col-md-12">
                        <label>العنوان</label>
                        <input class="form-control" type="text" placeholder="اكتب عنزتنك">
                    </div>
                    <div class="col-md-4">
                        <label>المحافظة</label>
                        <select class="form-control">
                            <option>اختر المحافظة</option>
                            <option>0100</option>
                            <option>0020</option>
                            <option>0030</option>
                        </select>
                    </div>
                    <div class="col-md-8">
                        <label>البريد الالكترونى</label>
                        <input class="form-control" type="text" placeholder="ادخل البريد الالكترونى">
                    </div>
                    <div class="col-md-6">
                        <label>التليفون 1</label>
                        <input class="form-control" type="text" placeholder="ادخل رقم التليفون">
                    </div>
                    <div class="col-md-6">
                        <label>الموبايل 1</label>
                        <input class="form-control" type="text" placeholder="ادخل رقم الموبايل">
                    </div>
                    <div class="col-md-6">
                        <label>التليفون 2</label>
                        <input class="form-control" type="text" placeholder="ادخل رقم التليفون">
                    </div>
                    <div class="col-md-6">
                        <label>الموبايل 2</label>
                        <input class="form-control" type="text" placeholder="ادخل رقم الموبايل">
                    </div>
                    <div class="col-md-6">
                        <label>المهنة المقدم اليها</label>
                        <select class="form-control">
                            <option>اختر المهنة</option>
                            <option>0100</option>
                            <option>0020</option>
                            <option>0030</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>الراتب المتوقع</label>
                        <input class="form-control" type="text" placeholder="ادخل الراتب المتوقع">
                    </div>     
                </div>

                <hr class="hr-cv">

                <div class="row text-center pt-3 pb-3 pl-3 pr-3">
                    <h2 class="text-center d-block w-100 h1 h2_services position-relative mb-4">جواز السفر والخبرات الخارجية</h2>  
                </div>

                <div class="row pb-5 pl-3 pr-3 form-cv">
                    <div class="col-md-6">
                        <label>رقم جواز السفر</label>
                        <input class="form-control" type="text" placeholder="ادخل رقم جواز السفر">
                    </div>
                    <div class="col-md-6">
                        <label>المهنة بجواز السفر</label>
                        <input class="form-control" type="text" placeholder="ادخل المهنة بجواز السفر">
                    </div>
                    <div class="col-md-6">
                        <label>الإنتهاء</label>
                        <input class="form-control" type="text" onfocus="(this.type='date')" onfocusout="(this.type='text')" placeholder="اختر تاريخ انتهاء حواز السفر">
                    </div>
                    <div class="col-md-6">
                        <label>هل سبق لك العمل بالخارج</label>
                        <select class="form-control">
                                <option>اختر ...</option>
                                <option>نعم</option>
                                <option>لا</option>
                            </select>
                    </div>           
                </div>

                <hr class="hr-cv">

                <div class="row text-center pt-3 pb-3 pl-3 pr-3">
                    <h2 class="text-center d-block w-100 h1 h2_services position-relative mb-4">بيانات رخصة القيادة</h2>  
                </div>

                <div class="row pb-5 pl-3 pr-3 form-cv">
                    <div class="col-md-4">
                        <label>هل تجيد قيادة السيارات؟</label>
                        <select class="form-control">
                            <option>اختر ...</option>
                            <option>نعم</option>
                            <option>لا</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>نوع الرخصة</label>
                        <select class="form-control">
                            <option>اختر نوع الرخصة</option>
                            <option>خاصة</option>
                            <option>درجة ثالثه</option>
                            <option>درجة ثانية</option>
                            <option>درجة اولى</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>تاريخ الإنتهاء</label>
                        <input class="form-control" type="text" onfocus="(this.type='date')" onfocusout="(this.type='text')" placeholder="اختر تاريخ انتهاء رخصة القيادة">
                    </div>           
                </div>

                <hr class="hr-cv">

                <div class="row text-center pt-3 pb-3 pl-3 pr-3">
                    <h2 class="text-center d-block w-100 h1 h2_services position-relative mb-4">الرقم الوزارى</h2>  
                </div>

                <div class="row pb-5 pl-3 pr-3 form-cv">
                    <div class="col-md-6">
                        <label>تاريخ الطلب</label>
                        <input class="form-control" type="text" onfocus="(this.type='date')" onfocusout="(this.type='text')" placeholder="اختر تاريخ الطلب">
                    </div>
                    <div class="col-md-6">
                        <label>رقم الطلب</label>
                        <input class="form-control" type="text" placeholder="ادخل رقم الطلب">
                    </div>            
                </div>

                <hr class="hr-cv">

                <div class="row text-center pt-3 pb-3 pl-3 pr-3">
                    <h2 class="text-center d-block w-100 h1 h2_services position-relative mb-4">المؤهلات العلمية</h2>  
                </div>

                <div class="pb-5 pl-3 pr-3 form-cv">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                            <th scope="col">الدرجة العلمية</th>
                            <th scope="col">الكلية او المعهد</th>
                            <th scope="col">الجامعة او الاكاديمية</th>
                            <th scope="col">التقدير</th>
                            <th scope="col">تاريخ التخرج</th>
                            </tr>
                        </thead>
                        <tbody class="tb1">
                            <tr>
                                <td>
                                    <select>
                                        <option>اختر الدرجة العلمية</option>
                                        <option>دبلوم</option>
                                        <option>متوسط</option>
                                        <option>يكاليريوس</option>
                                        <option>ماجستير</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option>اختر الكلية او المعهد</option>
                                        <option>طب</option>
                                        <option>هندسة</option>
                                        <option>تجارة</option>
                                        <option>حاسبات ومعلومات</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option>اختر الجامعة او الاكاديمية</option>
                                        <option>الدلتا</option>
                                        <option>السلاب</option>
                                        <option>النيل</option>
                                        <option>الزرقا</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control">
                                        <option>اختر التقدير</option>
                                        <option>ممتاز</option>
                                        <option>جيد جدا</option>
                                        <option>جيد</option>
                                        <option>مقلول</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control">
                                        <option>اختر تاريخ التحرج</option>
                                        <option value="1950">1950</option>
                                        <option value="1950">1959</option>
                                        <option value="2019">2019</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <select>
                                        <option>اختر الدرجة العلمية</option>
                                        <option>دبلوم</option>
                                        <option>متوسط</option>
                                        <option>يكاليريوس</option>
                                        <option>ماجستير</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option>اختر الكلية او المعهد</option>
                                        <option>طب</option>
                                        <option>هندسة</option>
                                        <option>تجارة</option>
                                        <option>حاسبات ومعلومات</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option>اختر الجامعة او الاكاديمية</option>
                                        <option>الدلتا</option>
                                        <option>السلاب</option>
                                        <option>النيل</option>
                                        <option>الزرقا</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control">
                                        <option>اختر التقدير</option>
                                        <option>ممتاز</option>
                                        <option>جيد جدا</option>
                                        <option>جيد</option>
                                        <option>مقلول</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control">
                                        <option>اختر تاريخ التحرج</option>
                                        <option value="1950">1950</option>
                                        <option value="1950">1959</option>
                                        <option value="2019">2019</option>
                                    </select>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    
                    <a class="float-left btn1-add-table bt-color">اضافه خبرة جديد +</a>
                    
                </div>

                <hr class="hr-cv">

                <div class="row text-center pt-3 pb-3 pl-3 pr-3">
                    <h2 class="text-center d-block w-100 h1 h2_services position-relative mb-4">خبرات العمل</h2>  
                </div>

                <div class="pb-5 pl-3 pr-3 form-cv">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">اسم الشركة</th>
                                <th scope="col" colspan="2">سنوات الخبرة</th>
                            </tr>
                        </thead>
                        <tbody class="tb2">
                            <tr>
                                <td>
                                    <input type="text" placeholder="ادخل اسم الشركة">
                                </td>
                                <td>
                                    <input class="form-control" type="text" onfocus="(this.type='date')" onfocusout="(this.type='text')" placeholder="من">
                                </td>
                                <td>
                                    <input class="form-control" type="text" onfocus="(this.type='date')" onfocusout="(this.type='text')" placeholder="الى">
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <input type="text" placeholder="ادخل اسم الشركة">
                                </td>
                                <td>
                                    <input class="form-control" type="text" onfocus="(this.type='date')" onfocusout="(this.type='text')" placeholder="من">
                                </td>
                                <td>
                                    <input class="form-control" type="text" onfocus="(this.type='date')" onfocusout="(this.type='text')" placeholder="الى">
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    
                    <a class="float-left btn2-add-table bt-color">اضافه موهل جديد +</a>
                    
                </div>

                <hr class="hr-cv">

                <div class="row text-center pt-3 pb-3 pl-3 pr-3">
                    <h2 class="text-center d-block w-100 h1 h2_services position-relative mb-4">اللغات</h2>  
                </div>

                <div class="pb-5 pl-3 pr-3 form-cv">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">اللغات</th>
                                <th scope="col" colspan="3">درجة اجادة اللغة</th>
                            </tr>
                        </thead>
                        <tbody class="tb3">
                            <tr>
                                <td>
                                    <select>
                                        <option>اختر اللغة</option>
                                        <option>انجليزى</option>
                                        <option>المانى</option>
                                        <option>فرنسى</option>
                                        <option>اسبانى</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option>قراءة</option>
                                        <option>ضعيف</option>
                                        <option>جيد</option>
                                        <option>جيد جدا</option>
                                        <option>ممتاز</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option>كتابة</option>
                                        <option>ضعيف</option>
                                        <option>جيد</option>
                                        <option>جيد جدا</option>
                                        <option>ممتاز</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option>فهم</option>
                                        <option>ضعيف</option>
                                        <option>جيد</option>
                                        <option>جيد جدا</option>
                                        <option>ممتاز</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <select>
                                        <option>اختر اللغة</option>
                                        <option>انجليزى</option>
                                        <option>المانى</option>
                                        <option>فرنسى</option>
                                        <option>اسبانى</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option>قراءة</option>
                                        <option>ضعيف</option>
                                        <option>جيد</option>
                                        <option>جيد جدا</option>
                                        <option>ممتاز</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option>كتابة</option>
                                        <option>ضعيف</option>
                                        <option>جيد</option>
                                        <option>جيد جدا</option>
                                        <option>ممتاز</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option>فهم</option>
                                        <option>ضعيف</option>
                                        <option>جيد</option>
                                        <option>جيد جدا</option>
                                        <option>ممتاز</option>
                                    </select>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    
                    <a class="float-left btn3-add-table bt-color">اضافه لغة جديد +</a>
                    
                </div>

                <hr class="hr-cv">

                <div class="row text-center pt-3 pb-3 pl-3 pr-3">
                    <h2 class="text-center d-block w-100 h1 h2_services position-relative mb-4">الدورات التدربية</h2>  
                </div>

                <div class="pb-5 pl-3 pr-3 form-cv">
                    <center>
                    <table class="table table-bordered" style="width:70%">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">الدورة التدريبية</th>
                            </tr>
                        </thead>
                        <tbody class="tb4">
                            <tr>
                                <td>
                                   <input type='text' placeholder="ادخل الدورة التدربية">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input type='text' placeholder="ادخل الدورة التدربية">
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>    
                    </center>
                    <a class="float-left btn4-add-table bt-color">اضافه دورة جديد +</a>
                    
                </div>

                <hr class="hr-cv">

                <div class="row text-center pt-3 pb-3 pl-3 pr-3">
                    <h2 class="text-center d-block w-100 h1 h2_services position-relative mb-4">اضافة ملفات</h2>
                    <h5 class="text-center d-block w-100 mb-4 time_clock">من فضلك إرفق السيرة الذاتية مع طلب العمل حتى يتم النظر فى طلبك المقدم</h5>  
                </div>

                <div class="row pb-2 pl-3 pr-3 form-cv">
                    <div class="col-md-6">
                        <label>الوصف</label>
                        <input class="form-control" type="text" placeholder="ادخل وصف الملف">
                    </div>
                    <div class="col-md-6">
                        <label>الملف</label>
                        <input class="form-control" type="text" onfocus="(this.type='file')" onfocusout="(this.type='text')" placeholder="اضف الملف">
                    </div>            
                </div>

                <div class="row text-center pb-5 form-cv">
                    <div class="col-md-12">
                        <input type="submit" value="التسجيل">
                    </div>   
                </div>


            </form>
        </div>
    </section>
    <!-- ================ end cv ========================== -->
@endsection