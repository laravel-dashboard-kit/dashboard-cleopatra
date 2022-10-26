<div {{ $attributes->merge(['class' => "grid grid-cols-{$cols} gap-{$gap}"]) }}>
    {!! $slot !!}
</div>
