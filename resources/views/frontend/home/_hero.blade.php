<div class="container-fluid bg-light my-6 mt-0" id="home">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                <h3 class="text-primary mb-3">{{ $heroSection->sub_heading ?? null }}</h3>
                <h1 class="display-3 mb-3">{{ $heroSection->heading ?? null  }}</h1>
                <h2 class="typed-text-output d-inline"></h2>
                <div class="typed-text d-none">{{ $heroSection->skills ?? null }}</div>
                <div class="d-flex align-items-center pt-5">
                    @isset($heroSection->cv)
                        <a href="{{ asset($heroSection->cv) }}" class="btn btn-primary py-3 px-4 me-5" target="_blank">{{ __('Download CV') }}</a>
                    @endisset

                    @isset($heroSection->video_url)
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="{{ asset($heroSection->video_url) }}" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="ms-4 mb-0 d-none d-sm-block">{{ __('Play Video') }}</h5>
                    @endisset
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid" src="{{ asset($heroSection->image ?? null) }}" alt="Image" />
            </div>
        </div>
    </div>
</div>
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>