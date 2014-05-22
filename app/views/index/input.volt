{% if a != empty %}
	{{ form("index/update/" ~ a.id, "mehthod": "post") }}
	Name: {{text_field("name", "value": a.name) ~ "<br>"}}
	Email: {{email_field("email", "value": a.email) ~ "<br>"}}
	{{submit_button("Update")}} - {{link_to(url.getBaseUri() ~ "index/list", "View List")}}
{% else %}
	{{ form("index/addNew", "mehthod": "post") }}
	Name: {{text_field("name") ~ "<br>"}}
	Email: {{email_field("email") ~ "<br>"}}
	{{submit_button("add")}} - {{link_to(url.getBaseUri() ~ "index/list", "View List")}}
{% endif %}
	
</form>