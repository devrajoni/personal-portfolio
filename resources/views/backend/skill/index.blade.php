<x-layout.backend>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="fs-5 text-center">{{ __('Skills') }}</div>
                        <a href="{{ route('backend.skills.create') }}" class="btn btn-primary">{{ __('Add New') }}</a>
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
                                    <th class="text-center border-0">{{ __('Name') }}</th>
                                    <th class="text-center border-0">{{ __('Percentage') }}</th>
                                    <th class="text-center border-0">{{ __('Color') }}</th>
                                    <th class="text-center border-0">{{ __('Status') }}</th>
                                    <th class="text-end border-0">{{ __('Action') }}</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($skills as $skill)
                                    <tr>
                                        <td class="text-start">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $skill->name }}</td>
                                        <td class="text-center">{{ $skill->percentage }}%</td>
                                        <td class="text-center" style="color:{{ $skill->color }}">
                                            {{ $skill->color }}
                                        </td>
                                        <td class="text-center">{{ $skill->status }}</td>
                                        <td class="text-end">
                                            <div class="d-flex justify-content-end align-items-center gap-3">
                                                <a href="{{ route('backend.skills.edit', $skill->id) }}" class="btn btn-primary btn-sm"><i class="ph-note-pencil fs-5"></i></a>

                                                <form method="POST" action="{{ route('backend.skills.destroy', $skill->id) }}" onsubmit="return confirm('Are you sure?');">
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
