@php
$id = \Str::of($attributes->get('name', null) . \Str::random(10))->slug();
$formGroupClasses = 'form-group';
$items = $attributes->get('items');

if ($attributes->get('inset')) {
    $formGroupClasses = ' mb-0';
}
@endphp

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

                <option {{!$attributes->get('value') ? 'selected' : ''}} >{{$attributes->get('desc','أختر') }}</option>
                @foreach($items as $item)
                <option {{$attributes->get('value') == $item->id ? 'selected' : ''}} value="{{$item->id}}">{{$item->title}}</option>
                @endforeach
            </select>





    </div>

    @isset($mask)
        <small class="form-text text-muted">{!! $mask !!}</small>
    @endisset

    @error($attributes->get('name'))
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>
