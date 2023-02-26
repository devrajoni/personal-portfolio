<div class="container-xxl py-6 pb-5" id="skill">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5 mb-5">Skills & Experience</h1>
                <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet
                    diam ipsum clita dolor duo clita sit.</p>
                <h3 class="mb-4">My Skills</h3>
                <div class="row align-items-center">
                    @foreach($skills as $skill)
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">{{ $skill->name }}</h6>
                                    <h6 class="font-weight-bold">{{ $skill->percentage }}</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{ $skill->percentage }}"
                                        aria-valuemin="0" aria-valuemax="100" style="background-color:{{ $skill->color }} !important;"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                    <li class="nav-item w-50">
                        <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill"
                            href="#tab-1">Experience</button>
                    </li>
                    <li class="nav-item w-50">
                        <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill" href="#tab-2">Education</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row gy-5 gx-4">
                            @foreach($experiences as $experience)
                                <div class="col-sm-6">
                                    <h5>{{ $experience->designation }}</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">{{ ($experience->started_at)->format('d/m/Y') ?? null }} - {{ ($experience->end_at)->format('d/m/Y') ?? null }}</p>
                                    <h6 class="mb-0">{{ $experience->company }}</h6>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row gy-5 gx-4">
                            @foreach($educations as $education)
                                <div class="col-sm-6">
                                    <h5>{{ $education->course }}</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">{{ ($education->started_at)->format('d/m/Y') ?? null }} - {{ ($education->end_at)->format('d/m/Y') ?? null }}</p>
                                    <h6 class="mb-0">{{ $education->institute }}</h6>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>