@props(['trigger'])

<div class="select" x-data="{ show: false }" @click.away="show = false">
    {{-- Trigger --}}
    <div @click="show = ! show">
        {{ $trigger }}
    </div>

    {{-- Dropdown Links --}}
    <div class="options" x-show="show" style="display: none;">
        {{ $slot }}
    </div>
</div>
