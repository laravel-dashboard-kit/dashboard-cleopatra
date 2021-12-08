<div class="row row-sm">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <x-dashboard-card header-bg="gray-200">
            @if ($attributes->get('title') || $attributes->get('subtitle') || isset($cardHeader))
                <x-slot name="header">
                    @if ($attributes->get('title'))
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title mb-0">{{ $attributes->get('title') }}</h3>
                        </div>
                    @endif
                    @if ($attributes->get('subtitle'))
                        <p class="tx-12 text-muted mb-0">
                            <h3 class="card-title mb-0">{{ $attributes->get('subtitle') }}</h3>
                        </p>
                    @endif

                    @isset($cardHeader)
                        {!! $cardHeader !!}
                    @endisset
                </x-slot>
            @endif

            <div class="table-responsive">
                {{-- <table class="table table-striped table-bordered text-md-nowrap w-100"> --}}
                <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    {!! $slot !!}
                </table>
            </div>

            @isset($cardFooter)
                <x-slot name="footer">
                    {!! $cardFooter !!}
                </x-slot>
            @endisset
        </x-dashboard-card>
    </div>
</div>
