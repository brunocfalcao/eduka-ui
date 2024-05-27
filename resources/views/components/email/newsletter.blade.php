@props([
    'title' => 'Welcome to [Product Name]!',
    'themeColor' => '#3869D4',
    'secondaryColor' => '#22BC66',
    'dangerColor' => '#FF6136'
])

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>{{ $title }}</title>
        <x-email::css
            :themeColor="$themeColor"
            :secondaryColor="$secondaryColor"
            :dangerColor="$dangerColor"
        />
    </head>
    <body>
        <x-email::preheader>
            {{ $preheader ?? '' }}
        </x-email::preheader>
        <table class="email-wrapper" width="100%" cellpadding="0" cellspacing="0" style="padding: 0; margin: 0;">
            <tr>
                <td align="center">
                    <table class="email-content" width="100%" cellpadding="0" cellspacing="0" style="padding: 0; margin: 0;">
                        <tr>
                            <td class="email-masthead" style="background-color: #FFFFFF; padding: 10px 0;">
                                {{ $header ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="email-body" width="100%" cellpadding="0" cellspacing="0" style="border-top: none;">
                                <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="content-cell">
                                            {{ $slot }}
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table class="email-footer" align="center" width="570" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="content-cell" align="center">
                                            {{ $footer ?? '' }}
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
