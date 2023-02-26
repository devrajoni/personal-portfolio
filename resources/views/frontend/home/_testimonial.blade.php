<div class="container-fluid bg-light py-5 my-5" id="testimonial">
    <div class="container-fluid py-5">
        <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Testimonial</h1>
        <div class="row justify-content-center">
            <div class="col-lg-3 d-none d-lg-block">
                <div class="testimonial-left h-100">
                    <img class="img-fluid wow fadeIn" data-wow-delay="0.1s"
                        src="{{ asset('assets/frontend/img/testimonial-1.jpg') }}" alt="Image" />
                    <img class="img-fluid wow fadeIn" data-wow-delay="0.3s"
                        src="{{ asset('assets/frontend/img/testimonial-2.jpg') }}" alt="Image" />
                    <img class="img-fluid wow fadeIn" data-wow-delay="0.5s"
                        src="{{ asset('assets/frontend/img/testimonial-3.jpg') }}" alt="Image" />
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="owl-carousel testimonial-carousel">
                   @foreach($testimonials as $testimonial)
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto"
                                    src="{{ asset($testimonial->user_image) }}" alt="Image" />
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-5 fst-italic">{{ $testimonial->description }}
                            </p>
                            <hr class="w-25 mx-auto">
                            <h5>{{ $testimonial->user_name }}</h5>
                            <span>{{ $testimonial->user_designation }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 d-none d-lg-block">
                <div class="testimonial-right h-100">
                    <img class="img-fluid wow fadeIn" data-wow-delay="0.1s"
                        src="{{ asset('assets/frontend/img/testimonial-1.jpg') }}" alt="Image" />
                    <img class="img-fluid wow fadeIn" data-wow-delay="0.3s"
                        src="{{ asset('assets/frontend/img/testimonial-2.jpg') }}" alt="Image" />
                    <img class="img-fluid wow fadeIn" data-wow-delay="0.5s"
                        src="{{ asset('assets/frontend/img/testimonial-3.jpg') }}" alt="Image" />
                </div>
            </div>
        </div>
    </div>
</div>