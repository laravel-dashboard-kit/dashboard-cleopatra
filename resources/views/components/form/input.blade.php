@php
$id = \Str::of($attributes->get('name', null) . \Str::random(10))->slug();
$formGroupClasses = 'form-group';

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

    <div class="input-group input-group-merge">
        @isset($before)
            <div class="input-group-prepend">
                <div class="input-group-text">
                    {!! $before !!}
                </div>
            </div>
        @endisset

        @if ($attributes->get('icon-before'))
            <div class="input-group-prepend">
                <div class="input-group-text">
                    @svg($attributes->get('icon-before'))
                </div>
            </div>
        @endif

        <input
            {{ $attributes->merge([
    'type' => 'text',
    'class' => 'form-control',
    'id' => $id,
    'placeholder' => $slot,
    'value' => is_string($attributes->get('name')) ? old($attributes->get('name')) : '',
]) }} />

        @isset($after)
            <div class="input-group-append">
                <div class="input-group-text">
                    {!! $after !!}
                </div>
            </div>
        @endisset

        @if ($attributes->get('icon-after'))
            <div class="input-group-append">
                <div class="input-group-text">
                    @svg($attributes->get('icon-after'))
                </div>
            </div>
        @endif
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
