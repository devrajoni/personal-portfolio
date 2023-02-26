@props([
    'group' => null,
    'label' => null,
    'type' => 'text',
    'name' => null,
    'id' => null,
    'value' => null,
    'required' => false,
    'disabled' => false,
])

<div class="{{ $group }}">
    <div class="form-group mb-2">
        <div class="d-flex justify-content-between align-items-center">
            <label class="form-label">{{ $label }} @if ($required) <i class="text-danger">*</i> @endif</label>

            @if ($type == 'file' && $value)
                <a href="{{ $value }}" class="badge bg-primary text-white" target="_blank">{{ __('Show File') }}</a>
            @endif
        </div>

        @if ($type == 'textarea')
            <textarea
                @class([
                    'form-control',
                    $attributes->get('class'),
                    'is-invalid' => $errors->has($name)
                ])
                name="{{ $name }}"
                id="{{ $id ?? $name }}"
                {{ $required ? 'required' : '' }}
                {{ $disabled ? 'disabled' : '' }}
                {{ $attributes }}>{{ old($name, $value) }}</textarea>
        @else
            <input
                type="{{ $type }}"
                @class([
                    'form-control',
                    'form-control-color w-100' => $type == 'color',
                    $attributes->get('class'),
                    'is-invalid' => $errors->has($name)
                ])
                name="{{ $name }}"
                id="{{ $id ?? $name }}"
                value="{{ old($name, $value) }}"
                {{ $required ? 'required' : '' }}
                {{ $disabled ? 'disabled' : '' }}
                {{ $attributes }}
            />
        @endif

        @error($name)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
