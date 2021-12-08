<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>{{ dashboard_ui()->title(__($attributes->get('title', 'Dashboard'))) }}</h1>
        </div>

        <div class="section-body">
            {!! $slot !!}
        </div>
    </section>

    @include('dashboard-abstract::include.notifications')
</div>
