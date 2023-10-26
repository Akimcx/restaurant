@php
    $value = old($name);
@endphp
<div class="relative">
    <input type="{{ $type }}" id="{{ $id }}"
        @if ($type !== 'password') value="{{ $value }}" @endif
        class="border-2 block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border-header appearance-none focus:outline-none focus:ring-0 focus:border-link-500 peer"
        placeholder="{{ $holder }}" name="{{ $name }}" />
    <label for="{{ $id }}"
        class="absolute text-base text-header duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:text-link-500 peer-placeholder-shown:scale-0 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-2">
        {{ $label }}
    </label>
    @error($name)
        <p class="text-sm text-pink-700">{{ $message }}</p>
    @enderror
</div>
