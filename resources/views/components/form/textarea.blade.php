@php
$id = $attributes->get('name', null) . \Str::random(10);
@endphp
<div class="mb-3">
    <label for="{{ $id }}"
        class="form-label">{!! $slot !!}</label>

    <textarea {{ $attributes->merge([
        "type" => "text",
        "class" => "form-control",
        "id" => $id,
        "placeholder" => $slot,
    ]) }}>{{ $attributes->get('value') }}</textarea>
</div>
