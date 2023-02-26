<x-layout.backend>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="fs-4 fw-bold">{{ isset($project) ? __('Update Project') : __('Add Project')}}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{ isset($project) ? route('backend.projects.update', $project->id) : route('backend.projects.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($project) @method('PUT') @endisset

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label class="form-label">{{ __('Category') }} <i class="text-danger">*</i></label>

                                    <div>
                                        <select class="form-select" name="category_id" id="category_id" required>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" @selected(($project->category_id ?? null) ==  $category->id)>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <x-ui.input
                                group="col-md-6"
                                :label="__('Title')"
                                name="title"
                                id="title"
                                :value="$project->title ?? null"
                                required
                            />

                            <x-ui.input
                                group="col-md-6"
                                :label="__('Sub Title')"
                                name="sub_title"
                                id="sub_title"
                                :value="$project->sub_title ?? null"
                                required
                            />
                        </div>

                        <div class="row">
                            <x-ui.input
                                group="col-md-6"
                                :label="__('Url')"
                                name="url"
                                id="url"
                                :value="$project->url ?? null"
                            />

                            <x-ui.input
                                group="col-md-6"
                                :label="__('Image')"
                                type="file"
                                name="image"
                                id="image"
                                :value="isset($project->image) ? asset($project->image) : null"
                                accept="image/*"
                            />
                        </div>

                        <div class="row">
                            <x-ui.input
                                group="col-md-12"
                                :label="__('Description')"
                                type="textarea"
                                name="description"
                                id="description"
                                rows="5"
                                :value="$project->description ?? null"
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
                                <a href="{{ route('backend.projects.index') }}" class="btn btn-danger">{{ __('Back') }}</a>
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
                $('#status').val("{{ $project->status ?? 'Active' }}");
            });
        </script>
    </x-slot>
</x-layouts.backend>
