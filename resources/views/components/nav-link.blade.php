@props(['active' => false])

<a {{ $attributes }}
  class=
  "{{ $active
      ? 'md:rounded-md md:bg-gray-900 md:px-3 md:py-2 md:text-sm md:font-medium md:text-white
    block rounded-md px-3 py-2 text-base font-medium bg-gray-900 text-white
    '
      : 'md:rounded-md md:px-3 md:py-2 md:text-sm md:font-medium md:text-gray-300 md:hover:bg-gray-700 md:hover:text-white
    block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white
    ' }}"
  aria-current="{{ $active ? 'page' : false }}">{{ $slot }}
</a>
