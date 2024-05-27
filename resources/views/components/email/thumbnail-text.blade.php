@props([
    'thumbnailUrl' => '#',
    'thumbnailSrc' => 'https://placehold.co/150x150',
    'thumbnailAlt' => 'Thumbnail',
    'text' => 'Description goes here'
])

<table class="body-action" align="center" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center">
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td style="padding-right: 10px;">
                                    <a href="{{ $thumbnailUrl }}" target="_blank">
                                        <img src="{{ $thumbnailSrc }}" alt="{{ $thumbnailAlt }}" width="150" height="150" style="display: block;">
                                    </a>
                                </td>
                                <td style="padding-left: 10px; vertical-align: top; color: #74787E; text-align: left;">
                                    {{ $text }}
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
