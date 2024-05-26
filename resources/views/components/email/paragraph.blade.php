{{--
    Component: Paragraph
    Variables:
    - entity (object) : The course or backend domain model.

    Example Usage:
    <x-email::paragraph
        :entity="$entity">
    This is a paragraph text.
    </x-email::paragraph>
--}}
@props([
    'theme' => null
])

<p style="line-height: 1.6; margin: 20px 0; color: {{ $entity->theme['text-color'] }};">{{ $slot }}</p>
