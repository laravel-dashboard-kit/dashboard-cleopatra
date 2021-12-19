@php
$id = \Str::of($attributes->get('name', null) . \Str::random(10))->slug();
@endphp

<<<<<<< HEAD
<div class="{{ $formGroupClasses }} @error($attributes->get('name')) has-danger @enderror"
    @if ($attributes->get('dir'))
    dir="{{ $attributes->get('dir') }}"
    @endif>

    @unless($attributes->get('hide-label'))
        @include('dashboard-cleopatra::components.form.label')
    @endunless


            <select {{ $attributes->merge([
    'class' => 'form-control',
]) }}>

                @foreach($items as $item)
                <option {{$attributes->get('value') == $item->id ? 'selected' : ''}} value="{{$item->id}}">{{$item->title}}</option>
                @endforeach
            </select>

=======
{{-- @error($attributes->get('name')) has-danger @enderror" --}}
{{-- $attributes->get('inset') --}}
<div @class(['px-4 my-6 w-full'])
    dir="{{ dashboard_rtl('rtl', 'ltr') }}">
>>>>>>> 8da2543b6efa0537860bc0e037be57a594963e21

    @isset($label)
        <x-dashboard-form-label :id="$id"
            :required="$attributes->get('required', false)">
            {!! $label !!}
        </x-dashboard-form-label>
    @endisset

    <select
        {{ $attributes->except('class')->merge([
            'type' => 'text',
            'id' => $id,
            'placeholder' => $slot,
            'value' => is_string($attributes->get('name')) ? old($attributes->get('name')) : '',
        ]) }}
        @class([
            'block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50',
        ])>
        @isset($items)
            @foreach ($items as $value => $item)
                <option value="{{ $value }}">{{ $item }}</option>
            @endforeach
        @else
            {!! $slot !!}
        @endisset
    </select>

    @error($attributes->get('name'))
        <div class="text-red-500">
            {{ $message }}
        </div>
    @enderror
</div>
