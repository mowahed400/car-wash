<div class="testimonial">
    <div class="container">
        <div class="section-header text-center">
            <p>{{trans('front.Testimonial')}}</p>
            <h2>{{trans('front.What our clients say')}}</h2>
        </div>
        <div class="owl-carousel testimonials-carousel">
            @foreach($reviews as $review)
            <div class="testimonial-item">

                <img @if($review->image == null)
                         src="{{asset('Front-End/img/no_user.png')}}" class="testimonial-img" alt=""
                     @else
                      src="{{asset('assets/images/'.$review->image)}}" alt="Image"
                @endif
                >


                <div class="testimonial-text">
                    <h3>{{$review->name}}</h3>
                    <p>
                         {{$review->feedback}}
                    </p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

