@props([
    'color' => '#bbbfc3',
    'href' => 'https://example.com'
])

<div style="background-color: #FFFFFF; padding: 10px 0; text-align: center;">
    <a href="{{ $href }}" target="_new" class="email-masthead_name" style="color: {{ $color }}; text-decoration: none; text-shadow: 0 1px 0 white; font-size: 16px; font-weight: bold;">
        {{ $slot }}
    </a>
</div>
