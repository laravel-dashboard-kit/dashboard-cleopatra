<li class="list-group-item">
    @isset($icon)
        @svg($icon)
    @endisset

    <div class="d-inline-block">
        {!! $slot !!}
    </div>
</li>
