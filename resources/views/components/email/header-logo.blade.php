@props([
    'src' => 'https://placehold.co/150x50',
    'alt' => 'Logo',
    'width' => 150,
    'height' => 50
])

<div style="background-color: #FFFFFF; display: flex; align-items: center; justify-content: center; padding: 20px 0;">
    <img src="{{ $src }}" alt="{{ $alt }}" class="email-masthead_logo" width="{{ $width }}" height="{{ $height }}" style="display: block;">
</div>
