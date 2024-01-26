@props(['label', 'name' => strtolower($label), 'divClass' => ''])
<div class="{{ $divClass }} relative bg-inherit">
    <input
        {{ $attributes->merge(['class' => 'w-full peer rounded outline outline-1 bg-transparent p-2 focus-visible:outline focus-visible:outline-1 focus-visible:outline-offset-1 focus-visible:placeholder:hidden']) }}
        placeholder="{{ $label }}" id="{{ $name }}" name="{{ $name }}" value="{{ old($name) }}"
        autocomplete="off" />
    <label
        class="visible absolute left-2 top-0 -translate-y-1/2 scale-100 bg-inherit px-2 transition-[scale_top] peer-placeholder-shown:invisible peer-placeholder-shown:scale-0"
        for="{{ $name }}">{{ $label }}</label>
    @error($name)
        <p>{{ $message }}</p>
    @enderror
</div>
