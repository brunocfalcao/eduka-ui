{{--
    Component: Image with Text
    Variables:
    - image (string): URL for the image. Default: 'https://placehold.co/150x100'.
    - link (string): URL for the link. Default: '#'.
    - alt (string): Alt text for the image. Default: 'Image'.

    Example Usage:
    <x-email::image-text
        image="https://placehold.co/150x100"
        link="https://www.clix.pt"
        alt="Description of the image">
    The image paragraphs goes here
    </x-email::image-text>
--}}
@props([
    'image' => "https://placehold.co/150x100",
    'link' => "#",
    'alt' => ""
])

<div class="image-text" style="display: flex; align-items: center; margin: 20px 0;">
    <a href="{{ $link }}" style="text-decoration: none;">
        <img src="{{ $image }}" alt="{{ $alt }}" style="max-width: 150px; height: auto; margin-right: 20px;">
    </a>
    <div style="flex: 1;">
        <p style="line-height: 1.6;">{{ $slot }}</p>
    </div>
</div>
