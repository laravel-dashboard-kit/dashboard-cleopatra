<div
    class="lg:fixed lg:w-full lg:top-0 lg:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">

    {{-- logo --}}
    <div class="flex-none w-56 flex flex-row items-center">
        <a href="{{ config('dashboard-ui.url.home') }}"
            class="flex flex-row items-center"">
            <img src="
            {{ config('dashboard-ui.logo.default') }}"
            width="150"
            height="150"
            class="w-10 flex-none">

            <strong class="capitalize ml-1 flex-1">cleopatra</strong>
        </a>
    </div>
    {{-- end logo --}}

    {{-- navbar content toggle --}}
    <button id="navbarToggle"
        class="hidden lg:block lg:fixed right-0 mr-6">
        <i class="fad fa-chevron-double-down"></i>
    </button>
    {{-- end navbar content toggle --}}

    {{-- navbar content --}}
    <div id="navbar"
        class="animated lg:hidden lg:fixed lg:top-0 lg:w-full lg:left-0 lg:mt-16 lg:border-t lg:border-b lg:border-gray-200 lg:p-10 lg:pb-5 lg:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center lg:flex-col lg:items-center">
        {{-- left --}}
        {{-- <div
            class="text-gray-600 lg:w-full lg:flex lg:flex-row lg:justify-evenly lg:pb-10 lg:mb-10 lg:border-b lg:border-gray-200"> --}}
            {{-- <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900"
                href="#"
                title="email"><i class="fad fa-check-circle"></i></a> --}}
        {{-- </div> --}}
        {{-- end left --}}

        {{-- start center --}}
        <div class="flex flex-row justify-between items-center gap-4 lg:w-full lg:flex lg:flex-col lg:justify-evenly lg:pb-5 lg:mb-5 lg:border-b lg:border-gray-500 lg:gap-0 lg:items-end">
            @foreach (config('dashboard-ui.nav') as $parent)
                @if (isset($parent['items']) && is_array($parent['items']))
                    <x-dashboard-dropdown :title="__($parent['title'])">
                        @foreach ($parent['items'] ?? [] as $child)
                            <x-dashboard-dropdown-item :href="$child['url']" :hideHr="$loop->last">
                                {{ __($child['title']) }}
                            </x-dashboard-dropdown-item>
                        @endforeach
                    </x-dashboard-dropdown>
                @else
                    <a class="text-gray-500 menu-btn p-0 m-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none transition-all ease-in-out duration-300"
                        href="{{ $parent['url'] }}">
                        <span>{{ __($parent['title']) }}</span>
                    </a>
                @endif

                @unless ($loop->last)
                    <hr class="hidden lg:block w-full my-3 border-gray-300">
                @endunless
            @endforeach
        </div>
        {{-- end center --}}

        {{-- right --}}
        <div class="flex flex-row-reverse items-center">

            {{-- user --}}
            <div class="dropdown relative lg:static">

                <button class="menu-btn focus:outline-none focus:shadow-outline flex flex-wrap items-center">
                    <div class="w-8 h-8 overflow-hidden rounded-full">
                        <img class="w-full h-full object-cover"
                            src="{{ optional(auth(config('dashboard-ui.guard', 'web'))->user())->avatar }}">
                    </div>

                    <div class="ml-2 capitalize flex ">
                        <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">
                            {{ optional(auth(config('dashboard-ui.guard', 'web'))->user())->name }}
                        </h1>
                        <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                    </div>
                </button>

                <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

                <div
                    class="text-gray-500 menu hidden lg:mt-5 lg:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">

                    {{-- item --}}
                    {{-- <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                        href="#">
                        <i class="fad fa-user-edit text-xs mr-1"></i>
                        edit my profile
                    </a> --}}
                    {{-- end item --}}

                    <hr>

                    {{-- item --}}
                    <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                        href="#"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fad fa-user-times text-xs mr-1"></i>
                        {{ __('Logout') }}
                    </a>
                    {{-- end item --}}

                </div>
            </div>
            {{-- end user --}}
        </div>
        {{-- end right --}}
    </div>
    {{-- end navbar content --}}

</div>
{{-- end navbar --}}
