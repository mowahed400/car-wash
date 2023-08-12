<div class="nav-bar" style="direction:  @if (App::getLocale() == 'en')
ltr
@else
rtl
@endif">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="#carousel" class="nav-item nav-link active">{{trans('front.Home')}}</a>
{{--                    <a href="#about" class="nav-item nav-link">{{trans('front.about')}}</a>--}}
                    <a href="#service" class="nav-item nav-link">{{trans('front.service')}}</a>
                    <a href="#price" class="nav-item nav-link">{{trans('front.price')}}</a>
                    <a href="#location" class="nav-item nav-link">{{trans('front.location')}}</a>
                    <a href="#footer" class="nav-item nav-link">{{trans('front.contact')}}</a>
                </div>
                <div class="ml-auto collapse navbar-collapse justify-content-between">
                    <a class="btn btn-custom" href="#price"> {{trans('front.Book Now')}} </a>
                </div>


                <div class="ml-auto collapse navbar-collapse justify-content-between">

                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                            <a  class="btn btn-custom"    rol e="button" id="direction-toggle" rel="alternate" hreflang="en" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                                EN
                            </a>
                        @else
                            <a  class="btn btn-custom"   id="direction-toggle" rel="alternate" hreflang="ar" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                                AR
                            </a>
                        @endif

                </div>







            </div>
        </nav>
    </div>
</div>
