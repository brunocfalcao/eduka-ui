{{--
    Component: Two Buttons
    Variables:
    - entity (object): The course or backend domain model containing theme details.
    - button-link-left (string): URL for the first button.
    - button-link-right (string): URL for the second button.
    - button-text-left (string): Label for the first button.
    - button-text-right (string): Label for the second button.

    Example Usage:
    <x-email::two-buttons
        :entity="$entity"
        button-link-left="https://example.com/link1"
        button-link-right="https://example.com/link2"
        button-text-left="First Button"
        button-text-right="Second Button"
    />
--}}
@props([
    'entity',
    'button-link-left' => '#',
    'button-link-right' => '#',
    'button-text-left' => 'Button 1',
    'button-text-right' => 'Button 2',
])

<div class="button-group" style="display: flex; justify-content: center; gap: 10px; margin: 20px 0;">
    <a target="_new" href="{{ $props['button-link-left'] }}" class="button" style="display: block; width: 200px; margin: 0; padding: 10px; text-align: center; background-color: {{ $entity->theme['button-color'] }}; color: {{ $entity->theme['button-text-color'] }}; text-decoration: none; border-radius: 5px;">{{ $props['button-text-left'] }}</a>
    <a target="_new" href="{{ $props['button-link-right'] }}" class="button" style="display: block; width: 200px; margin: 0; padding: 10px; text-align: center; background-color: {{ $entity->theme['button-color'] }}; color: {{ $entity->theme['button-text-color'] }}; text-decoration: none; border-radius: 5px;">{{ $props['button-text-right'] }}</a>
</div>
