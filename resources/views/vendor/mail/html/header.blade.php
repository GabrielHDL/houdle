<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Houdle®')
<img src="https://houdle.com/assets/notification-logo.png" class="logo" alt="Houdle Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
