<x-layout.backend>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="fs-4 fw-bold">{{ isset($experience) ? __('Update Experience') : __('Add Experience')}}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{ isset($experience) ? route('backend.experiences.update', $experience->id) : route('backend.experiences.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($experience) @method('PUT') @endisset

                        <div class="row">
                            <x-ui.input
                                group="col-md-6"
                                :label="__('Company')"
                                name="company"
                                id="company"
                                :value="$experience->company ?? null"
                                required
                            />

                            <x-ui.input
                                group="col-md-6"
                                :label="__('Designation')"
                                name="designation"
                                id="designation"
                                :value="$experience->designation ?? null"
                                required
                            />
                        </div>

                        <div class="row">
                            <x-ui.input
                                group="col-md-6"
                                :label="__('Started At')"
                                type="date"
                                name="started_at"
                                id="started_at"
                                :value="optional($experience->started_at ?? null)->format('Y-m-d')"
                            />

                            <x-ui.input
                                group="col-md-6"
                                :label="__('End At')"
                                type="date"
                                name="end_at"
                                id="end_at"
                                :value="optional($experience->end_at ?? null)->format('Y-m-d')"
                            />
                        </div>

                        <div class="row">
                            <div class="col-md-12">
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
                                <a href="{{ route('backend.experiences.index') }}" class="btn btn-danger">{{ __('Back') }}</a>
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
                $('#status').val("{{ $experience->status ?? 'Active' }}");
            });
        </script>
    </x-slot>
</x-layouts.backend>
