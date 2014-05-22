<table border=1 >
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
	</tr>
	{% for list in lists %}
	<tr>
		<td>{{ list.id }}</td>
		<td>{{ list.name }}</td>
		<td>{{ list.email }}</td>
		<td>{{ link_to(url.getBaseUri() ~ "index/input/" ~ list.id, "Update") }} - {{ link_to(url.getBaseUri() ~ "index/delete/" ~ list.id, "Delete") }}</td>
	</tr>
	{% endfor %}
</table>
{{ link_to(url.getBaseUri() ~ "index/input", "Add New") }}