<div class="location" id="location" style="direction:  @if (App::getLocale() == 'en')
ltr
@else
rtl
@endif">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-header text-left">
                    <p>{{trans('front.Washing Points')}}</p>
                    <h2>{{trans('front.Car Washing & Care Points')}}</h2>
                </div>
                <div class="row">
                    @foreach($points as $point)
                    <div class="col-md-6">
                        <div class="location-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="location-text">
                                <h3>{{$point->title}}</h3>
                                <p>{{$point->address}}</p>
                                <p>{{$point->number}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-7">
                <div class="location-form">
                    <h3>{{trans('front.Where To Find Us')}}</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d187154.54735798904!2d39.62061624085226!3d24.466316548101428!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1691582844283!5m2!1sar!2seg" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
