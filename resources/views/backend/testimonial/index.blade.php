<x-layout.backend>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="fs-4 fw-bold">{{ __('Testimonials') }}</div>
                        <a href="{{ route('backend.testimonials.create') }}" class="btn btn-primary">{{ __('Add New') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0 rounded align-middle">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-start border-0">{{ __('SL') }}</th>
                                    <th class="text-center border-0">{{ __('User Name') }}</th>
                                    <th class="text-center border-0">{{ __('User Designation') }}</th>
                                    <th class="text-center border-0">{{ __('User Image') }}</th>
                                    <th class="text-center border-0">{{ __('Description') }}</th>
                                    <th class="text-center border-0">{{ __('Status') }}</th>
                                    <th class="text-end border-0">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <td class="text-start">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $testimonial->user_name }}</td>
                                        <td class="text-center">{{ $testimonial->user_designation }}</td>
                                        <td class="text-center">
                                            <img src="{{ isset($testimonial->user_image) ? asset($testimonial->user_image) : null }}" width="80" height="80" alt="Image" />
                                        </td>
                                        <td class="text-center">{{ $testimonial->description }}</td>
                                        <td class="text-center">{{ $testimonial->status }}</td>
                                        <td class="text-end">
                                            <div class="d-flex justify-content-end align-items-center gap-3">
                                                <a href="{{ route('backend.testimonials.edit', $testimonial->id) }}" class="btn btn-primary btn-sm"><i class="ph-note-pencil fs-5"></i></a>

                                                <form method="POST" action="{{ route('backend.testimonials.destroy', $testimonial->id) }}" onsubmit="return confirm('Are you sure?');">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="ph-trash fs-5"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.backend>
