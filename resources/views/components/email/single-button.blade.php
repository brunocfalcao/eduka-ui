@props([
    'url' => '#',
    'bgColor' => '#3869D4',
    'text' => 'Button Text'
])

<table class="body-action" align="center" width="100%" cellpadding="0" cellspacing="0" role="presentation" style="width: 100%; -premailer-width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; text-align: center; margin: 30px auto; padding: 0;">
    <tr>
        <td align="center" style="word-break: break-word; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 16px;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation">
                <tr>
                    <td align="center" style="word-break: break-word; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 16px;">
                        <a href="{{ $url }}" class="f-fallback button" target="_blank" style="color: #FFF; background-color: {{ $bgColor }}; display: inline-block; text-decoration: none; border-radius: 3px; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16); -webkit-text-size-adjust: none; box-sizing: border-box; border-color: {{ $bgColor }}; border-style: solid; border-width: 10px 18px;">
                            {{ $text }}
                        </a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
