<x-layout.backend>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="fs-4 fw-bold">{{ isset($education) ? __('Update Education') : __('Add Education')}}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{ isset($education) ? route('backend.educations.update', $education->id) : route('backend.educations.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($education) @method('PUT') @endisset

                        <div class="row">
                            <x-ui.input
                                group="col-md-6"
                                :label="__('Institute')"
                                name="institute"
                                id="institute"
                                :value="$education->institute ?? null"
                                required
                            />

                            <x-ui.input
                                group="col-md-6"
                                :label="__('Course')"
                                name="course"
                                id="course"
                                :value="$education->course ?? null"
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
                                :value="optional($education->started_at ?? null)->format('Y-m-d')"
                            />

                            <x-ui.input
                                group="col-md-6"
                                :label="__('End At')"
                                type="date"
                                name="end_at"
                                id="end_at"
                                :value="optional($education->end_at ?? null)->format('Y-m-d')"
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
                                <a href="{{ route('backend.educations.index') }}" class="btn btn-danger">{{ __('Back') }}</a>
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
                $('#status').val("{{ $education->status ?? 'Active' }}");
            });
        </script>
    </x-slot>
</x-layouts.backend>
