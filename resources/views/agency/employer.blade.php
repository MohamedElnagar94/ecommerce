@extends('agency.includes_agency.index')
@section('title','الموظفين')
@section('heading','تسجيل اصحاب العمل')
@section('content')
    <!-- ================ start employer ========================== -->
    <section class="container-fluid">
        <div class="container">
                {{ Form::open(['route' => 'employer.store' , 'method' => 'post' , 'class' => 'text-right']) }}
                <div class="row text-center pt-5 pb-3 pl-3 pr-3">
                    <h2 class="text-center d-block w-100 h1 h2_services position-relative mb-4">تسجيل الشركات</h2>
                </div>
                <div class="row pb-3 pl-3 pr-3 form-cv">
                    <div class="col-md-12">
                        {!! Form::label('company_name', 'الاسم الشركة او المؤسسة'); !!}
                        {!! Form::text('company_name', old('company_name'), ['class' => 'form-control','placeholder' => 'ادخل اسمك الشركة او المؤسسة']) !!}
                    </div>
                    <div class="col-md-12">
                        {!! Form::label('address', 'عنوان الشركة'); !!}
                        {!! Form::text('address', old('address'), ['class' => 'form-control','placeholder' => 'اكتب عنوان الشركة']) !!}
                    </div>
                    <div class="col-md-8 col-md-offset-right-4">
                        {!! Form::label('website', 'الموقع الالكترونى للشركة'); !!}
                        {!! Form::text('website', old('website'), ['class' => 'form-control','placeholder' => 'ادخل الموقع الالكترونى للشركة']) !!}
                    </div>
                    <div class="col-md-8 col-md-offset-right-4">
                        {!! Form::label('email', 'البريد الالكترونى للشركة'); !!}
                        {!! Form::email('email', old('email'), ['class' => 'form-control text-right','placeholder' => 'ادخل البريد الالكترونى للشركة']) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('fax', 'الفاكس'); !!}
                        {!! Form::number('fax', old('fax'), ['class' => 'form-control text-right','placeholder' => 'ادخل رقم الفاكس']) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('mail_box', 'صندوق البريد'); !!}
                        {!! Form::number('mail_box', old('mail_box'), ['class' => 'form-control text-right','placeholder' => 'ادخل صندوق البريد']) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('postal_code', 'الرمز البريدى'); !!}
                        {!! Form::number('postal_code', old('postal_code'), ['class' => 'form-control text-right','placeholder' => 'ادخل الرمز البريدى']) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('phone1', 'تليفون الشركة 1'); !!}
                        {!! Form::number('phone1', old('phone1'), ['class' => 'form-control text-right','placeholder' => 'ادخل رقم التليفون']) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('mobile1', 'الموبايل 1'); !!}
                        {!! Form::number('mobile1', old('mobile1'), ['class' => 'form-control text-right','placeholder' => 'ادخل رقم الموبايل']) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('phone2', 'تليفون الشركة 2'); !!}
                        {!! Form::number('phone2', old('phone2'), ['class' => 'form-control text-right','placeholder' => 'ادخل رقم التليفون']) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('mobile2', 'الموبايل 2'); !!}
                        {!! Form::number('mobile2', old('mobile2'), ['class' => 'form-control text-right','placeholder' => 'ادخل رقم الموبايل']) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('employer', 'صاحب العمل'); !!}
                        {!! Form::text('employer', old('employer'), ['class' => 'form-control text-right','placeholder' => 'اسم صاحب العمل']) !!}
                    </div>

                    <div class="col-md-6">
                        {!! Form::label('employer_phone', 'رقم صاحب العمل'); !!}
                        {!! Form::number('employer_phone', old('employer_phone'), ['class' => 'form-control text-right','placeholder' => 'ادخل موبايل صاحب العمل']) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('employer_mobile', 'تليفون صاحب العمل'); !!}
                        {!! Form::number('employer_mobile', old('employer_mobile'), ['class' => 'form-control text-right','placeholder' => 'ادخل تليفون صاحب العمل']) !!}
                    </div>   
                </div>
                <div class="row text-center pb-5 form-cv">
                    <div class="col-md-12">
                        <input type="submit" value="التسجيل">
                    </div>   
                </div>

            {{ Form::close() }}
        </div>
    </section>
    <!-- ================ end employer ========================== -->
@endsection