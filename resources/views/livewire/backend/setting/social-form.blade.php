<div>
    <form wire:submit.prevent="submit">
        <div class="row">
            <x-ui.input
                group="col-md-6"
                :label="__('Icon')"
                wire:model.defer="icon"
                name="icon"
                id="icon"
                required
            />

            <x-ui.input
                group="col-md-6"
                :label="__('Url')"
                wire:model.defer="url"
                name="url"
                id="url"
                required
            />
        </div>

        <div class="row">
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary me-3">{{ __('Submit') }}</button>
            </div>
        </div>
    </form>

    <div class="table-responsive mt-3">
        <table class="table table-centered table-nowrap mb-0 rounded align-middle">
            <thead class="thead-light">
                <tr>
                    <th class="text-start border-0">{{ __('Icon') }}</th>
                    <th class="text-center border-0">{{ __('Url') }}</th>
                    <th class="text-end border-0">{{ __('Action') }}</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($socials as $social)
                    <tr>
                        <td class="text-start">{{ $social->icon }}</td>
                        <td class="text-center">{{ $social->url }}</td>
                        <td class="text-end">
                            <div class="d-flex justify-content-end align-items-center gap-3">
                                <button type="button" class="btn btn-primary btn-sm" wire:click="edit({{ $social->id }})">
                                    <i class="ph-note-pencil fs-5"></i>
                                </button>

                                <button type="button" class="btn btn-danger btn-sm" wire:click="delete({{ $social->id }})">
                                    <i class="ph-trash fs-5"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
