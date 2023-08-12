<div class="top-bar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="logo">
                    <a href="index.html">
                        <h1>Auto<span>Wash</span></h1>
                        <!-- <img src="img/logo.jpg" alt="Logo"> -->
                    </a>
                </div>
            </div>
            @foreach($contactus as $contact) @endforeach
            <div class="col-lg-8 col-md-7 d-none d-lg-block">
                <div class="row">
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>{{trans('front.worktime')}}</h3>
                                @if (App::getLocale() == 'en')
                                        From : {{$contact->open_at}} PM &nbsp; |&nbsp; To : {{$contact->close_at}} AM
                                    @else
                                        من : {{$contact->open_at}} م &nbsp; | &nbsp; الي : {{$contact->close_at}} ص
                                    @endif</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <a  href="callto:{{$contact->whats}}"><i class="fa fa-phone-alt"></i></a>
                            </div>
                            <div class="top-bar-text">
                                <h3>{{trans('front.Call')}}</h3>
                                <p>+{{$contact->whats}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <a  href="mailto:{{$contact->email}}"><i class="far fa-envelope"></i></a>
                            </div>
                            <div class="top-bar-text">
                                <h3>{{trans('front.Email')}}</h3>
                                <p>{{$contact->email}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
