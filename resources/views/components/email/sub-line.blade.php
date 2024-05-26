{{--
    Component: Sub-Line
    Variables:
    - entity (object) : The course or backend domain model.

    Example Usage:
    <x-email::sub-line
        :entity="$entity">
    This is a disclaimer or sub-line text.
    </x-email::sub-line>
--}}
@props([
    'entity' => null
])

<div class="sub-line" style="font-size: 12px; color: {{ $entity->theme['text-color'] }}; text-align: center; margin: 20px 0;">{{ $slot }}</div>
