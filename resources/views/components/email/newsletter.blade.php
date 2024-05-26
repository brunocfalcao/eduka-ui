{{--
    Component: Newsletter Layout
    Variables:
    - entity (object) : The course or backend domain model.
    - subject (string): The email subject tracked on title.
    - preview (string): The email preview when possible to use.

    Example Usage:
    <x-email::newsletter
        :entity="$entity"
        subject="My subject"
        preview="My preview"
    >
    Newsletter content goes here...
    </x-email::newsletter>
--}}
@props([
    'entity' => null,
    'subject' => "",
    'preview' => ""
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject ?? $entity->name }}</title>
    <style>
        .social-icon {
            width: 24px;
            height: 24px;
            vertical-align: middle;
            margin: 0 5px;
        }
        p {
            line-height: 1.6;
            margin: 20px 0;
        }
        .button {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            background-color: {{ $entity->theme['button-color'] }};
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }
        .button-group {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 20px 0;
        }
        .sub-line {
            font-size: 12px;
            color: {{ $entity->theme['text-color'] }};
            text-align: center;
            margin: 20px 0;
        }
        .image-text {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }
        .image-text img {
            max-width: 150px;
            height: auto;
            margin-right: 20px;
        }
        .image-text div {
            flex: 1;
        }
        @media (max-width: 600px) {
            .button {
                width: 100%;
                margin: 10px 0;
            }
            .button-group {
                flex-direction: column;
                gap: 10px;
            }
            .image-text {
                flex-direction: column;
                text-align: center;
            }
            .image-text img {
                margin: 0 0 10px 0;
            }
        }
    </style>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 20px 0; background-color: {{ $entity->theme['background-color'] }};">

<!-- Preview Text -->
<span style="display: none; visibility: hidden; opacity: 0; height: 0; width: 0; overflow: hidden; position: absolute; z-index: -1;">{{ $preview }}</span>

<x-email::header :backgroundColor="{{ $entity->theme['background-color'] }}"/>

<!-- Container Start -->
<div style="max-width: 600px; margin: 0 auto; background-color: {{ $entity->theme['container-color'] }}; padding: 20px; border: 1px solid #e0e0e0;">

    <!-- Content Start -->
    <div style="padding: 20px; text-align: left;">
        {{ $slot }}
    </div>
    <!-- Content End -->

</div>
<!-- Container End -->

<x-email::footer :entity="{{ $entity }}" />

</body>
</html>
