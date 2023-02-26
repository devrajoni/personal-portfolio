<x-layout.backend>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="fs-4 fw-bold">{{ isset($team) ? __('Update Team') : __('Add Team')}}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{ isset($team) ? route('backend.teams.update', $team->id) : route('backend.teams.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($team) @method('PUT') @endisset

                        <div class="row">
                            <x-ui.input
                                group="col-md-6"
                                :label="__('Name')"
                                name="name"
                                id="name"
                                :value="$team->name ?? null"
                                required
                            />

                            <x-ui.input
                                group="col-md-6"
                                :label="__('Designation')"
                                name="designation"
                                id="designation"
                                :value="$team->designation ?? null"
                                required
                            />
                        </div>

                        <div class="row">
                            <x-ui.input
                                group="col-md-6"
                                :label="__('Image')"
                                type="file"
                                name="image"
                                id="image"
                                :value="isset($team->image) ? asset($team->image) : null"
                                accept="image/*"
                                :required="isset($team) ? false : true"
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
                                <a href="{{ route('backend.teams.index') }}" class="btn btn-danger">{{ __('Back') }}</a>
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
                $('#status').val("{{ $team->status ?? 'Active'}}");
            });
        </script>
    </x-slot>
</x-layouts.backend>
