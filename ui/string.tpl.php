<h2>{{@string->original}}</h2>

<table>
	<thead>
		<tr>
			<th>Translation</th>
			<th>Language</th>
		</tr>
	</thead>
	<tbody>
<F3:repeat group="{{@translations}}" value="{{@translation}}">
		<tr>
			<td>{{@translation->translation}}</td>
			<td>{{@translation->language}}</td>
		</tr>
</F3:repeat>
	</tbody>
</table>


<form action="/{{@BASE}}translation" method="POST">
	<input type="hidden" name="string" value="{{@string->hash}}" />

	<div>
		Translation : <input type="text" name="translation" />
	</div>

	<div>
		Language : <input type="text" name="language" size="5" />
	</div>

	<div>
		<input type="submit" name="submit" value="submit" />
	</div>
</form>
