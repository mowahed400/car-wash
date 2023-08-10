<div class="footer" id="footer">
    <div class="container">
        <div class="row" >

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
            {{-- <div class="col-lg-3 col-md-6">--}}
            {{-- <div class="footer-link">--}}
            {{-- <h2>Useful Links</h2>--}}
            {{-- <a href="">Terms of use</a>--}}
            {{-- <a href="">Privacy policy</a>--}}
            {{-- <a href="">Cookies</a>--}}
            {{-- <a href="">Help</a>--}}
            {{-- <a href="">FQAs</a>--}}
            {{-- </div>--}}
            {{-- </div>--}}
            <div class="col-lg-4 col-md-6">
                <div class="footer-newsletter">
                    <h2>Give Us FeedBack</h2>
                    <form>
                        <input type="text" name="name" class="form-control" placeholder="Yor Name">

                        <div class="col-sm-12 mb-2">
                            <label for="" class="custom-file-label">Photo</label>
                            <input type="file" name="image" id="file" class="custom-file-input">
                        </div>


                        <textarea name="feed" rows="1" class="form-control" placeholder="Feed Back"></textarea><br>

                        <button class="btn btn-custom">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <p>&copy; <a href="#">Auto Wash </a>, All Right Reserved. Designed By <a href="https://moon-space.net"> Moon Space</a></p>
    </div>
</div>
