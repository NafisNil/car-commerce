@props(['title' => '', 'footerLinks' => ''])
<x-base-layout :title="$title" bodyClass="app-layout">

    <x-layouts.header>
        
    </x-layouts.header>
    {{$slot}}

    
</x-base-layout>
