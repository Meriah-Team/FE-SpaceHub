<a {{ $attributes }}
    class="{{ $active ? 'text-[var(--color-spacehub)]' : 'text-gray-300 hover:bg-gray-50 hover:text-[var(--color-spacehub)]' }} rounded-md  px-3 py-2 text-m font-medium"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
<!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
