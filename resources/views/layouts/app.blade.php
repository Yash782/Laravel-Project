@props(['title' => '', 'footerLinks' => ''])
<x-base-layout :$title>
    @include('layouts.partials.header')
    {{ $slot }}
</x-base-layout>