<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}">
    <title>Nuevo titulo {{ $title ?? ''}}</title>
</head>
<body>
        {{-- @include('partials.navigation') --}}
{{-- @yield('content') --}}
<x-layouts.navigation>
        
</x-layouts.navigation>
{{ $slot }}

        </body>
</html>