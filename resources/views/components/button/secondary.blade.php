@props(['link' => false])
@if ($link)
    <a {{ $attributes }}
        class="rounded-lg bg-white p-2 text-center font-semibold text-header outline outline-1 hover:bg-header hover:text-white">
        {{ $slot }}
    </a>
@else
    <button type="button"
        class="rounded-lg bg-white p-2 text-center font-semibold text-header outline outline-1 hover:bg-header hover:text-white">
        {{ $slot }}
    </button>
@endif
