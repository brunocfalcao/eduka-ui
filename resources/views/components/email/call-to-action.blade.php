@props([
    'heading' => '10% off your next purchase!',
    'body' => "Thanks for your support! Here's a coupon for 10% off your next purchase.",
    'button_url' => '#',
    'button_text' => 'Use this discount now...',
    'button_bg_color' => '#22BC66' // Default to green
])

<table class="discount" align="center" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center">
            <h1 class="discount_heading">{{ $heading }}</h1>
            <p class="discount_body">{{ $body }}</p>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center">
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <a href="{{ $button_url }}" class="button" target="_blank" style="color: #FFF; background-color: {{ $button_bg_color }}; display: inline-block; text-decoration: none; border-radius: 3px; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16); -webkit-text-size-adjust: none; box-sizing: border-box; border-color: {{ $button_bg_color }}; border-style: solid; border-width: 10px 18px;">
                                        {{ $button_text }}
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
