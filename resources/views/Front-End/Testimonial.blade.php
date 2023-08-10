<div class="testimonial">
    <div class="container">
        <div class="section-header text-center">
            <p>{{trans('front.Testimonial')}}</p>
            <h2>{{trans('front.What our clients say')}}</h2>
        </div>
        @foreach($reviews as $review)
        <div class="owl-carousel testimonials-carousel">
            <div class="testimonial-item">
                <img   src="{{asset('assets/images/'.$review->image)}}" alt="Image">
                <div class="testimonial-text">
                    <h3>{{$review->name}}</h3>
                    <p>
                        {{$review->feedback}}
                    </p>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</div>

