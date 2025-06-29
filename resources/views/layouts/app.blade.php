@props(['title' => '', 'bodyClass' => '', 'footerLinks' => ''])

<x-base-layout :$title :$bodyClass>
    <x-layouts.header />

    {{ $slot }}

    {{-- <x-layouts.footer :$footerLinks /> --}}
</x-base-layout>
