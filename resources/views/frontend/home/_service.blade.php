<div class="container-fluid bg-light my-5 py-6" id="service">
    <div class="container">
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h1 class="display-5 mb-0">My Services</h1>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a class="btn btn-primary py-3 px-5" href="">Hire Me</a>
            </div>
        </div>
        <div class="row g-4">
            @foreach($services as $service)
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="{{ $service->icon }}"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3">{{ $service->name }}</h4>
                            <!-- <h6 class="mb-3">Start from <span class="text-primary">$199</span></h6> -->
                            <span>{{ $service->description }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>