@php
$id = \Str::of($attributes->get('name', null) . \Str::random(10))->slug();
@endphp

{{-- @error($attributes->get('name')) has-danger @enderror" --}}
{{-- $attributes->get('inset') --}}
<div @class(['px-4 my-6 w-full'])
    dir="{{ dashboard_rtl('rtl', 'ltr') }}">

    @unless($attributes->get('hide-label'))
        @include('dashboard-cleopatra::components.form.label')
    @endunless

    <div class="">
        @isset($before)
            <div class="">
                <div class="">
                    {!! $before !!}
                </div>
            </div>
        @endisset

        @if ($attributes->get('icon-before'))
            <div class="">
                <div class="">
                    @svg($attributes->get('icon-before'))
                </div>
            </div>
        @endif

        <input
            {{ $attributes->except(['class', 'value'])->merge([
                'type' => 'text',
                'id' => $id,
                'placeholder' => $slot,
                'value' => is_string($attributes->get('name')) && strlen(old($attributes->get('name'))) > 0 ? old($attributes->get('name')) : $attributes->get('value'),
            ]) }}
            @class([
                'block w-full rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50',
                'border-gray-300' => !$errors->has($attributes->get('name')),
                'border-red-500' => $errors->has($attributes->get('name')),
            ]) />

        @isset($after)
            <div class="">
                <div class="">
                    {!! $after !!}
                </div>
            </div>
        @endisset

        @if ($attributes->get('icon-after'))
            <div class="">
                <div class="">
                    @svg($attributes->get('icon-after'))
                </div>
            </div>
        @endif
    </div>

    @isset($mask)
        <small class="">{!! $mask !!}</small>
    @endisset

    @error($attributes->get('name'))
        <div class="text-red-500">
            {{ $message }}
        </div>
    @enderror
</div>
