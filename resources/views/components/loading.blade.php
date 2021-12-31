@if ($attributes->get('livewire'))
    <div wire:loading.delay
        class="w-full">
@endif

<div
    {{ $attributes->merge([
        'class' => 'd-flex text-center w-full bg-white',
        'style' => 'height:200px;',
    ]) }}>
    <h1 class="h1">
        Loading
    </h1>
    {{-- <img src="{{ asset('assets/dashboard/cleopatra/img/loader-2.svg') }}"
        alt="Loading"> --}}
</div>

@if ($attributes->get('livewire'))
    </div>
@endif
