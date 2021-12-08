<div class="dropdown relative md:static">
    <button
        class="text-gray-500 menu-btn p-0 m-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none transition-all ease-in-out duration-300 flex items-center">

        @isset($title)
            {!! $title !!}
        @endisset

        <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
    </button>

    <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

    <div
        class="menu hidden rounded bg-white md:right-0 md:w-full shadow-md absolute z-20 right-0 w-84 mt-5 py-2 animated faster">
        {!! $slot !!}
    </div>
</div>

{{-- $attributes->merge([
    'color' => $attributes->get('color'),
    'outline' => $attributes->get('outline'),
]) --}}
