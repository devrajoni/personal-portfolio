<div class="container-xxl py-6 pb-5" id="team">
    <div class="container">
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h1 class="display-5 mb-0">Team Members</h1>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a class="btn btn-primary py-3 px-5" href="">Contact Us</a>
            </div>
        </div>
        <div class="row g-4">
            @foreach($teams as $team)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded" src="{{ asset($team->image) }}" alt="Image" style="height: 200px; width: 370px;" />
                        <div class="team-text bg-white rounded-end p-4">
                            <div>
                                <h5>{{ $team->name }}</h5>
                                <span>{{ $team->designation }}</span>
                            </div>
                            <i class="fa fa-arrow-right fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>