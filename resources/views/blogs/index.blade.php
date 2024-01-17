<x-layout>

    <!-- hero section -->
    <x-hero />

    <x-category :currentCategory="$currentCategory??null"/>

    {{-- <x-user :currentUser="$currentUser ?? null" /> --}}

    <x-search />
    <!-- blogs section -->

    <x-blog-section :blogs='$blogs' />

    <!-- subscribe new blogs -->

    <x-subscribe />

    <!-- footer -->

</x-layout>
