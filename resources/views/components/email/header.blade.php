{{--
    Component: Header
    Variables:
    - entity (object): The course or backend domain model.
    - alt (string): Alt text for the header image.
    - src (string): URL for the header image.

    Example Usage:
    <x-email::header
        :entity="$entity"
        alt="Your Alt Text"
        src="https://yourdomain.com/logo.png"
    />
--}}
@props([
    'entity' => null,
    'alt' => null,
    'src' => "https://placehold.co/150x50"
])

<div style="text-align: center; padding: 20px 0; background-color: {{ $entity->theme['background-color'] }};">
    <img src="{{ $src }}" alt="{{ $alt ?? $entity->domain }}" style="max-width: 100%; height: auto;">
</div>
