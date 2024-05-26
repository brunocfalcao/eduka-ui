{{--
    Component: Footer
    Variables:
    - entity (object): The course or backend domain model.

    Example Usage:
    <x-email::footer
        :entity="$entity"
    />
--}}
@props([
    'entity' => null
])

<div style="text-align: center; padding: 20px 0;">
    <p style="font-size: 12px; color: {{ $entity->theme['text-footer-color'] }};">
        {{ $entity->name }} - <a href="https://{{ $entity->domain }}" style="color: {{ $entity->theme['text-footer-color'] }}; text-decoration: none;">{{ $entity->domain }}</a>
    </p>
    <p>
        <a target="_blank" href="https://twitter.com/{{ $entity->twitter_handle }}" style="color: {{ $entity->theme['text-footer-color'] }}; text-decoration: none;">
            <img src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/icons/twitter.svg" alt="Twitter" style="width: 24px; height: 24px; vertical-align: middle; margin: 0 5px; filter: invert( {{ $entity->theme['text-footer-color'] == '#000000' ? '0%' : '100%' }} );">
        </a>
    </p>
</div>
