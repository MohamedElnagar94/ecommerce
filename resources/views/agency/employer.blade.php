@extends('agency.includes_agency.index')
@section('title','الموظفين')
@section('heading','تسجيل اصحاب العمل')
@section('content')
    <!-- ================ start employer ========================== -->
    <section class="container-fluid">
        <div class="container">
            <form>
                <div class="row text-center pt-5 pb-3 pl-3 pr-3">
                    <h2 class="text-center d-block w-100 h1 h2_services position-relative mb-4">تسجيل الشركات</h2>
                </div>

                <div class="row pb-3 pl-3 pr-3 form-cv">
                    <div class="col-md-12">
                        <label>الاسم الشركة او المؤسسة</label>
                        <input class="form-control" type="text" placeholder="ادخل اسمك الشركة او المؤسسة">
                    </div>
                    <div class="col-md-12">
                        <label>عنوان الشركة</label>
                        <input class="form-control" type="text" placeholder="اكتب عنوان الشركة">
                    </div>
                    <div class="col-md-8 col-md-offset-right-4">
                        <label>الموقع الالكترونى للشركة</label>
                        <input class="form-control" type="text" placeholder="ادخل الموقع الالكترونى للشركة">
                    </div>
                    <div class="col-md-8 col-md-offset-right-4">
                        <label>البريد الالكترونى للشركة</label>
                        <input class="form-control" type="text" placeholder="ادخل البريد الالكترونى للشركة">
                    </div>
                    <div class="col-md-4">
                        <label>الفاكس</label>
                        <input class="form-control" type="text" placeholder="ادخل رقم الفاكس">
                    </div>
                    <div class="col-md-4">
                        <label>صندوق البريد</label>
                        <input class="form-control" type="text" placeholder="ادخل صندوق البريد">
                    </div>
                    <div class="col-md-4">
                        <label>الرمز البريدى</label>
                        <input class="form-control" type="text" placeholder="ادخل الرمز البريدى">
                    </div>
                    <div class="col-md-6">
                        <label>تليفون الشركة 1</label>
                        <input class="form-control" type="text" placeholder="ادخل رقم التليفون">
                    </div>
                    <div class="col-md-6">
                        <label>الموبايل 1</label>
                        <input class="form-control" type="text" placeholder="ادخل رقم الموبايل">
                    </div>
                    <div class="col-md-6">
                        <label>تليفون الشركة 2</label>
                        <input class="form-control" type="text" placeholder="ادخل رقم التليفون">
                    </div>
                    <div class="col-md-6">
                        <label>الموبايل 2</label>
                        <input class="form-control" type="text" placeholder="ادخل رقم الموبايل">
                    </div>
                    <div class="col-md-6">
                        <label>صاحب العمل</label>
                        <input class="form-control" type="text" placeholder="اسم صاخب العمل">
                    </div>
                    <div class="col-md-6">
                        <label>رقم صاحب العمل</label>
                        <input class="form-control" type="text" placeholder="رقم صاحب العمل">
                    </div>
                    <div class="col-md-6">
                        <label>موبايل صاحب العمل</label>
                        <input class="form-control" type="text" placeholder="ادخل موبايل صاحب العمل">
                    </div>
                    <div class="col-md-6">
                        <label>تليفون صاحب العمل</label>
                        <input class="form-control" type="text" placeholder="ادخل تليفون صاحب العمل">
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
    <!-- ================ end employer ========================== -->
@endsection