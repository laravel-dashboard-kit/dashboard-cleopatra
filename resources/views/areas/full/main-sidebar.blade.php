<div class="main-sidebar"
    style="overflow: auto;">
    <aside id="sidebar-wrapper  p-3">
        <div class="sidebar-brand">
            <a href="{{ config('dashboard-ui.url.home') }}">
                <img src="{{ config('dashboard-ui.logo.default') }}"
                    width="150"
                    height="150">
            </a>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="{{ config('dashboard-ui.url.home') }}">
                    <img src="{{ config('dashboard-ui.logo.small') }}"
                        width="20"
                        height="20">
                </a>
            </div>
        </div>

        <ul class="sidebar-menu">
            {{-- <li class="{{ $activePage == 'home' ? 'active' : '' }}"> --}}

            @foreach (config('dashboard-ui.nav') as $parent)
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
                                        {{-- not supported --}}
                                        {{-- <li class="sub-slide">
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
                                        </li> --}}
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
            @endforeach
            {{-- Translation link --}}
            @if (config('dashboard-ui.translation.enabled') && !config('dashboard-ui.translation.hide_from_menu'))
                <li>
                    <a class="nav-link"
                        href="/{{ config('translation.ui_url') }}">
                        @svg('ri-translate-2', ['class' => "text-primary"])
                        <span>{{ __('translation::translation.translations') }}</span>
                    </a>
                </li>
            @endif
        </ul>
    </aside>
</div>
