<div class="footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer-contact">
                    <h2>{{trans('front.get')}}</h2>
                    @foreach($contactus as $contact) @endforeach
                    <p><i class="fa fa-map-marker-alt"></i>{{$contact->worktime}}</p>
                    <p><i class="fa fa-phone-alt"></i>{{$contact->whats}}</p>
                    <p><i class="fa fa-envelope"></i>{{$contact->email}}</p>
                    <div class="footer-social">
                        <a class="btn" href="{{$contact->twlinke}}"><i class="fab fa-twitter"></i></a>
                        <a class="btn" href="{{$contact->inslinke}}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-link">
                    <h2>{{trans('front.links')}}</h2>
                    <a href="#about">{{trans('front.about')}}</a>
                    <a href="#footer">{{trans('front.contact')}}</a>
                    <a href="#service">{{trans('front.service')}}</a>
                    <a href="#location">{{trans('front.location')}}</a>
                    <a href="#price">{{trans('front.price')}}</a>
                </div>
            </div>
{{--            <div class="col-lg-3 col-md-6">--}}
{{--                <div class="footer-link">--}}
{{--                    <h2>Useful Links</h2>--}}
{{--                    <a href="">Terms of use</a>--}}
{{--                    <a href="">Privacy policy</a>--}}
{{--                    <a href="">Cookies</a>--}}
{{--                    <a href="">Help</a>--}}
{{--                    <a href="">FQAs</a>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-lg-4 col-md-6">
                <div class="footer-newsletter">
                    <h2>{{trans('front.news')}}</h2>
                    <form>
                        <input class="form-control" placeholder="{{trans('front.name')}}">
                        <input class="form-control" placeholder="{{trans('front.email')}}">
                        <button class="btn btn-custom">{{trans('front.submit')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <p>&copy; <a href="#">{{trans('front.broject-name')}}</a>, All Right Reserved. Designed By Moon-Space.net</p>
    </div>
</div>
