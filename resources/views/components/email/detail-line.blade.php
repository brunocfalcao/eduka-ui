@props([
    'label' => '',
    'value' => ''
])

<tr>
    <td class="attributes_item" style="font-family: 'Courier New', Courier, monospace; line-height: 1.8em; padding: 5px 0;">
        <strong>{{ $label }}:</strong> {{ $value }}
    </td>
</tr>
