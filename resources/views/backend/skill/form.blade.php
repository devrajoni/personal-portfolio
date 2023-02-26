<x-layout.backend>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="fs-4 fw-bold">{{ isset($skill) ?  __('Update Skill') :  __('New Skill') }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{ isset($skill) ? route('backend.skills.update', $skill->id) : route('backend.skills.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($skill) @method('PUT') @endisset

                        <div class="row">
                            <x-ui.input
                                group="col-md-6"
                                :label="__('Name')"
                                name="name"
                                id="name"
                                :value="$skill->name ?? null"
                                required
                            />

                            <x-ui.input
                                group="col-md-6"
                                :label="__('Percentage')"
                                type="number"
                                name="percentage"
                                id="percentage"
                                :value="$skill->percentage ?? null"
                                required
                            />
                        </div>

                        <div class="row">
                            <x-ui.input
                                group="col-md-6"
                                :label="__('Color')"
                                type="color"
                                name="color"
                                id="color"
                                :value="$skill->color ?? null"
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
                                <a href="{{ route('backend.skills.index') }}" class="btn btn-danger">{{ __('Back') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <x-slot:js>
        <script>
            $(document).ready(function () {
                $('#status').val("{{ $skill->status ?? 'Active' }}");
            });
        </script>
    </x-slot>
</x-layouts.backend>
