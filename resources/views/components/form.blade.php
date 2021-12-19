<form
    {{ $attributes->except(['method'])->merge([
        'action' => '#',
        'method' => 'POST',
        'enctype' => 'multipart/form-data',
        'novalidate',
    ]) }}>
    {{ csrf_field() }}

    @method($attributes->get('method', 'post'))
    {!! $slot !!}
</form>
