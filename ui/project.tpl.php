<h2>{{@project->name}}</h2>

<table>
	<thead>
		<tr>
			<th>Original</th>
            <th>Translated</th>
            <th>Untranslated</th>
		</tr>
	</thead>
	<tbody>
<F3:repeat group="{{@strings}}" value="{{@string}}">
		<tr>
			<td><a href="/{{@BASE}}string/{{@string->hash}}">{{@string->original}}</a></td>
			<td></td>
			<td></td>
		</tr>
</F3:repeat>
	</tbody>
</table>


<form action="/{{@BASE}}string" method="POST">
	<input type="hidden" name="project" value="{{@project->hash}}" />

	<div>
		Original : <input type="text" name="original" />
	</div>

	<div>
		<input type="submit" name="submit" value="submit" />
	</div>
</form>
