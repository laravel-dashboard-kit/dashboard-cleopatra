@php
$id = $attributes->get('name', null) . \Str::random(10);
@endphp

<div @class(['px-4 my-6 w-full'])
    dir="{{ dashboard_rtl('rtl', 'ltr') }}">

    @unless($attributes->get('hide-label'))
        @include('dashboard-cleopatra::components.form.label')
    @endunless

    <textarea
        {{ $attributes->except('class')->merge([
            'type' => 'text',
            'id' => $id,
            'placeholder' => $slot,
        ]) }}
        @class([
            "block w-full rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50",
            'border-gray-300' => !$errors->has($attributes->get('name')),
            'border-red-500' => $errors->has($attributes->get('name')),
        ])>{{ $attributes->get('value') }}</textarea>

    @error($attributes->get('name'))
        <div class="text-red-500">
            {{ $message }}
        </div>
    @enderror
</div>
