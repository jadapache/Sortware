<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="vendor/adminlte/dist/img/Logofull.svg" class="logo" alt="Sortware Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
