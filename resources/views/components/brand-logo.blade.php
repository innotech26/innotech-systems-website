@props([
    'src' => asset('images/Inno-tech-logo.png'),
    'alt' => 'Inno-Tech Systems Logo',
    'class' => 'h-10 w-auto',
])

<img src="{{ $src }}" alt="{{ $alt }}" {{ $attributes->merge(['class' => $class]) }}>

