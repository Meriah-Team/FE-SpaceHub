@props(['name'])

<button {{ $attributes->merge([
    'class' => 'px-2 py-1 bg-gray-50 text-[var(--color-spacehub-dark)] border border-[var(--color-spacehub-dark)] text-xs rounded-md hover:bg-[var(--color-spacehub-dark)] hover:text-white transition-colors duration-200'
]) }}>
    {{ $name }}
</button>