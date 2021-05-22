<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img class="mx-auto h-12 w-auto" src="https://sortware.ml/assets/img/logo.png" alt="Sortware">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
