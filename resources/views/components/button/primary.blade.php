<button {{ $attributes->merge(['class' => 'rounded-lg bg-link-500 p-2 font-semibold text-white hover:bg-link-900']) }}
    type="submit">
    {{ $slot }}
</button>
