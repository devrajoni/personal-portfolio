<x-layout.backend>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="fs-4 fw-bold">{{ __('About Section') }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form method="POST" action="{{ $aboutSection ? route('backend.about-sections.update', $aboutSection->id) : route('backend.about-sections.store') }}" enctype="multipart/form-data">
                        @csrf
                        @isset($aboutSection) @method('PUT') @endisset

                        <div class="row">
                            <x-ui.input
                                group="col-md-6"
                                :label="__('Experience Year')"
                                name="experience_year"
                                id="experience_year"
                                :value="$aboutSection->experience_year ?? null"
                                required
                            />

                            <x-ui.input
                                group="col-md-6"
                                :label="__('Experience Title')"
                                name="experience_title"
                                id="experience_title"
                                :value="$aboutSection->experience_title ?? null"
                                required
                            />
                        </div>

                        <div class="row">
                            <x-ui.input
                                group="col-md-12"
                                :label="__('Description')"
                                type="textarea"
                                name="description"
                                id="description"
                                :value="$aboutSection->description ?? null"
                                rows="3"
                            />
                        </div>

                        <div class="row">
                            <x-ui.input
                                group="col-md-6"
                                :label="__('Image')"
                                type="file"
                                name="image"
                                id="image"
                                accept="image/*"
                                :value="isset($aboutSection->image) ? asset($aboutSection->image) : null"
                                :required="$aboutSection ? false : true"
                            />

                            <x-ui.input
                                group="col-md-6"
                                :label="__('Total Client')"
                                name="total_client"
                                id="total_client"
                                :value="$aboutSection->total_client ?? null"
                            />
                        </div>

                        <div class="row">
                            <x-ui.input
                                group="col-md-12"
                                :label="__('Client Description')"
                                type="textarea"
                                name="client_description"
                                id="client_description"
                                :value="$aboutSection->client_description ?? null"
                                rows="3"
                                required
                            />
                        </div>

                        <div class="row">
                            <x-ui.input
                                group="col-md-12"
                                :label="__('Total Project')"
                                name="total_project"
                                id="total_project"
                                :value="$aboutSection->total_project ?? null"
                                required
                            />
                        </div>

                        <div class="row">
                            <x-ui.input
                                group="col-md-12"
                                :label="__('Project Description')"
                                type="textarea"
                                name="project_description"
                                id="project_description"
                                :value="$aboutSection->project_description ?? null"
                                rows="3"
                                required
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
