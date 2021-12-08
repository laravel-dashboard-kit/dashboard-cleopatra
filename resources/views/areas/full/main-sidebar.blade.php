{{-- start sidebar --}}
<div id="sideBar"
    class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">

    {{-- sidebar content --}}
    <div class="flex flex-col">

        {{-- sidebar toggle --}}
        <div class="text-right hidden md:block mb-4">
            <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
            </button>
        </div>
        {{-- end sidebar toggle --}}

        <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">homes</p>

        {{-- link --}}
        <a href="./index.html"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-chart-pie text-xs mr-2"></i>
            Analytics dashboard
        </a>
        {{-- end link --}}

        {{-- link --}}
        <a href="./index-1.html"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-shopping-cart text-xs mr-2"></i>
            ecommerce dashboard
        </a>
        {{-- end link --}}

        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">apps</p>

        {{-- link --}}
        <a href="./email.html"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-envelope-open-text text-xs mr-2"></i>
            email
        </a>
        {{-- end link --}}

        {{-- link --}}
        <a href="#"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-comments text-xs mr-2"></i>
            chat
        </a>
        {{-- end link --}}

        {{-- link --}}
        <a href="#"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-shield-check text-xs mr-2"></i>
            todo
        </a>
        {{-- end link --}}

        {{-- link --}}
        <a href="#"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-calendar-edit text-xs mr-2"></i>
            calendar
        </a>
        {{-- end link --}}

        {{-- link --}}
        <a href="#"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-file-invoice-dollar text-xs mr-2"></i>
            invoice
        </a>
        {{-- end link --}}

        {{-- link --}}
        <a href="#"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-folder-open text-xs mr-2"></i>
            file manager
        </a>
        {{-- end link --}}


        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">UI Elements</p>

        {{-- link --}}
        <a href="./typography.html"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-text text-xs mr-2"></i>
            typography
        </a>
        {{-- end link --}}

        {{-- link --}}
        <a href="./alert.html"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-whistle text-xs mr-2"></i>
            alerts
        </a>
        {{-- end link --}}


        {{-- link --}}
        <a href="./buttons.html"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-cricket text-xs mr-2"></i>
            buttons
        </a>
        {{-- end link --}}

        {{-- link --}}
        <a href="#"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-box-open text-xs mr-2"></i>
            Content
        </a>
        {{-- end link --}}

        {{-- link --}}
        <a href="#"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-swatchbook text-xs mr-2"></i>
            colors
        </a>
        {{-- end link --}}

        {{-- link --}}
        <a href="#"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-atom-alt text-xs mr-2"></i>
            icons
        </a>
        {{-- end link --}}

        {{-- link --}}
        <a href="#"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-club text-xs mr-2"></i>
            card
        </a>
        {{-- end link --}}

        {{-- link --}}
        <a href="#"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-cheese-swiss text-xs mr-2"></i>
            Widgets
        </a>
        {{-- end link --}}

        {{-- link --}}
        <a href="#"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-computer-classic text-xs mr-2"></i>
            Components
        </a>
        {{-- end link --}}



    </div>
    {{-- end sidebar content --}}

</div>
{{-- end sidbar --}}




{{-- TO USE LATER --}}
{{-- <a href="{{ config('dashboard-ui.url.home') }}">
<img src="{{ config('dashboard-ui.logo.default') }}"
    width="150"
    height="150">
</a> --}}
{{-- <a href="{{ config('dashboard-ui.url.home') }}">
    <img src="{{ config('dashboard-ui.logo.small') }}"
        width="20"
        height="20"> --}}
{{-- <li class="{{ $activePage == 'home' ? 'active' : '' }}"> --}}

{{-- @foreach (config('dashboard-ui.nav') as $parent)
@if (isset($parent['type']) && $parent['type'] == 'divider')
    <li>
        <h3>{{ __($parent['title']) }}</h3>
    </li>
@else
    @if (isset($parent['items']) && is_array($parent['items']))
        <li class="dropdown">
            <a class="nav-link has-dropdown"
                href="javascript:void(0);">
                @isset($parent['icon'])
                    @svg($parent['icon'], ['class' => $parent['icon_color'] ?? ""])
                @endisset
                <span>{{ __($parent['title']) }}</span>
            </a>
            <ul class="dropdown-menu"
                style="display: none;">
                @foreach ($parent['items'] ?? [] as $child)
                    @if (isset($child['items']) && is_array($child['items']))
                        <li class="sub-slide">
                            <a class="sub-side-menu__item"
                                data-toggle="sub-slide"
                                href="#">
                                <span class="sub-side-menu__label">{{ __($child['title']) }}</span><i
                                    class="sub-angle fe fe-chevron-left"></i>
                            </a>
                            <ul class="sub-slide-menu">
                                @foreach ($child['items'] as $subitem)
                                    <li>
                                        <a class="sub-slide-item"
                                            href="{{ $subitem['url'] }}">{{ __($subitem['title']) }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="{{ $child['url'] }}">{{ __($child['title']) }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
    @else
        <li>
            <a class="nav-link"
                href="{{ $parent['url'] }}">
                @svg($parent['icon'], ['class' => $parent['icon_color'] ?? ""])
                <span>{{ __($parent['title']) }}</span>
            </a>
        </li>
    @endif
@endif
@endforeach --}}
{{-- Translation link --}}
{{-- @if (config('dashboard-ui.translation.enabled') && !config('dashboard-ui.translation.hide_from_menu'))
<li>
    <a class="nav-link"
        href="/{{ config('translation.ui_url') }}">
        @svg('ri-translate-2', ['class' => "text-primary"])
        <span>{{ __('translation::translation.translations') }}</span>
    </a>
</li>
@endif --}}
