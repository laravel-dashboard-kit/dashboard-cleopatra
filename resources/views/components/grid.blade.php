<div {{ $attributes->merge(['class' => "grid grid-cols-{$cols} grid-rows-{$rows} gap-{$gap}"]) }}>
    {!! $slot !!}
</div>
