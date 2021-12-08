@if (strlen($slot) > 0)
    <label for="{{ $id ?? '' }}">
        {!! $slot !!}:

        @if ($attributes->get('required', false))
            <span>*</span>
        @endif
    </label>
@endif
