<div class="container-xxl pb-5" id="contact">
    <div class="container py-5">
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h1 class="display-5 mb-0">Let's Work Together</h1>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a class="btn btn-primary py-3 px-5" href="">Say Hello</a>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="mb-2">My office:</p>
                <h3 class="fw-bold">{{ setting('company_address') }}</h3>
                <hr class="w-100">
                <p class="mb-2">Call me:</p>
                <h3 class="fw-bold">{{ setting('company_phone') }}</h3>
                <hr class="w-100">
                <p class="mb-2">Mail me:</p>
                <h3 class="fw-bold">{{ setting('company_email') }}</h3>
                <hr class="w-100">
                <p class="mb-2">Follow me:</p>
                <div class="d-flex pt-2">
                    @foreach($socials as $social)
                        <a class="btn btn-square btn-primary me-2" href="{{ $social->url }}"><i class="{{ $social->icon }}"></i></a>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <livewire:frontend.contact.contact-form />
            </div>
        </div>
    </div>
</div>
