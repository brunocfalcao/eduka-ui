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
    'entity' => null,
    'buttonLinkLeft' => '#',
    'buttonLinkRight' => '#',
    'buttonTextLeft' => 'Button 1',
    'buttonTextRight' => 'Button 2',
])

<div class="button-group" style="display: flex; justify-content: center; gap: 10px; margin: 20px 0;">
    <a target="_new" href="{{ $buttonLinkLeft }}" class="button" style="display: block; width: 200px; margin: 0; padding: 10px; text-align: center; background-color: {{ $entity->theme['email-button-color'] }}; color: {{ $entity->theme['email-button-text-color'] }}; text-decoration: none; border-radius: 5px;">{{ $buttonTextLeft }}</a>
    <a target="_new" href="{{ $buttonLinkRight }}" class="button" style="display: block; width: 200px; margin: 0; padding: 10px; text-align: center; background-color: {{ $entity->theme['email-button-color'] }}; color: {{ $entity->theme['email-button-text-color'] }}; text-decoration: none; border-radius: 5px;">{{ $buttonTextRight }}</a>
</div>
