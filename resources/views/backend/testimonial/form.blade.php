<x-layout.backend>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="fs-4 fw-bold">{{ isset($testimonial) ? __('Update testimonial') : __('Add testimonial') }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{ isset($testimonial) ? route('backend.testimonials.update', $testimonial->id) : route('backend.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($testimonial) @method('PUT') @endisset

                        <div class="row">
                            <x-ui.input
                                group="col-md-6"
                                :label="__('User Name')"
                                name="user_name"
                                id="user_name"
                                :value="$testimonial->user_name ?? null"
                                required
                            />
                            <x-ui.input
                                group="col-md-6"
                                :label="__('User Image')"
                                type="file"
                                name="user_image"
                                id="user_image"
                                :value="isset($testimonial->user_image) ? asset($testimonial->user_image) : null"
                                :required="isset($testimonial) ? false : true"
                            />

                        </div>

                        <div class="row">
                            <x-ui.input
                                group="col-md-12"
                                :label="__('Description')"
                                type="textarea"
                                name="description"
                                id="description"
                                :value="$testimonial->description ?? null"
                                rows="3"
                            />
                        </div>

                        <div class="row">
                            <x-ui.input
                                group="col-md-6"
                                :label="__('Designation')"
                                name="user_designation"
                                id="user_designation"
                                :value="$testimonial->user_designation ?? null"
                                required
                            />

                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label class="form-label">{{ __('Status') }} <i class="text-danger">*</i></label>

                                    <div>
                                        <select class="form-select" name="status" id="status" required>
                                            <option value="Active">{{ __('Active') }}</option>
                                            <option value="Inactive">{{ __('Inactive') }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary me-3">{{ __('Submit') }}</button>
                                <a href="{{ route('backend.testimonials.index') }}" class="btn btn-danger">{{ __('Back') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <x-slot:js>
        <script>
            $(document).ready(function(){
                $('#status').val("{{ $testimonial->status ?? 'Active'}}");
            });
        </script>
    </x-slot>
</x-layouts.backend>
