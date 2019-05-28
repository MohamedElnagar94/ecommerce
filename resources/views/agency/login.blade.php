@extends('agency.includes_agency.index')
@section('title','تسجيل الدخول')
@section('heading','تسجيل الدخول')
@section('content')
    <!-- ================ start login ========================== -->
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h5 class="h1">تسجيل الدخول</h5>
                    <hr>
                </div>
                <form class="col-md-offset-right-2 col-md-8 offset-md-2">
                    <label>اسم المستخدم</label>
                    <input class="form-control" type="text" name="" placeholder="ادخل اسم المستخدم">
                    
                    <label>الباسورد</label>
                    <input class="form-control" type="text" name="" placeholder="ادخل كلمة السر">
                    <a href="">هل نسيت كلمة السر ؟</a>
                    <a href="" style="float:left">ليس لديك حساب ؟ تسجيل</a>
                    <center>
                        <input class="text-center" type="submit" name="" value="تسجيل الدخول">
                    </center>
                </form>
            </div>
        </div>
    </section>
    <!-- ================ end login ========================== -->
@endsection