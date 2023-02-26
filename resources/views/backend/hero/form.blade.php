<x-layout.backend>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="fs-4 fw-bold">{{ __('Hero Section') }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form method="POST" action="{{ $heroSection ? route('backend.hero-sections.update', $heroSection->id) : route('backend.hero-sections.store') }}" enctype="multipart/form-data">
                        @csrf
                        @isset($heroSection) @method('PUT') @endisset

                        <div class="row">
                            <x-ui.input
                                group="col-md-6"
                                :label="__('Heading')"
                                name="heading"
                                id="heading"
                                :value="$heroSection->heading ?? null"
                                required
                            />

                            <x-ui.input
                                group="col-md-6"
                                :label="__('Sub Heading')"
                                name="sub_heading"
                                id="sub_heading"
                                :value="$heroSection->sub_heading ?? null"
                                required
                            />
                        </div>

                        <div class="row">
                            <x-ui.input
                                group="col-md-6"
                                :label="__('Skills')"
                                name="skills"
                                id="skills"
                                :value="$heroSection->skills ?? null"
                                required
                            />

                            <x-ui.input
                                group="col-md-6"
                                :label="__('Video Url')"
                                name="video_url"
                                id="video_url"
                                :value="$heroSection->video_url ?? null"
                            />
                        </div>

                        <div class="row">
                            <x-ui.input
                                group="col-md-6"
                                :label="__('Image')"
                                type="file"
                                name="image"
                                id="image"
                                :value="isset($heroSection->image) ? asset($heroSection->image) : null"
                                accept="image/*"
                                :required="$heroSection ? false : true "
                            />

                            <x-ui.input
                                group="col-md-6"
                                :label="__('CV')"
                                type="file"
                                name="cv"
                                id="cv"
                                :value="isset($heroSection->cv) ? asset($heroSection->cv) : null"
                                accept="application/pdf"
                            />
                        </div>

                        <div class="row">
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary me-3">{{ __('Submit') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.backend>