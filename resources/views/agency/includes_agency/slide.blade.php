<!-- ================ start header ========================== -->
    <header class="container-fluid">
@if (Request::path() === '/')
        <div class="">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{url('/')}}/storage/agency/images/slide.jpeg" class="d-block w-100 slide_image" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{{url('/')}}/storage/agency/images/travel-agent.jpg" class="d-block w-100 slide_image" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{{url('/')}}/storage/agency/images/shutterstock_266693240.jpg" class="d-block w-100 slide_image" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev button_arrow arrow_right" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="arrow_left_right" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next button_arrow arrow_left" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="arrow_left_right" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>  
@else
    <div class="">
        <img src="{{url('/')}}/storage/agency/images/slide.jpeg" class="d-block w-100 slide_image" alt="...">
        <div class="container position-relative">
            <div class="head_manu">
                <div class="row">
                    <div class="padding_title position-relative w-100">
                        <h1 class="color-white h1_title">@yield('heading')</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>        

@endif