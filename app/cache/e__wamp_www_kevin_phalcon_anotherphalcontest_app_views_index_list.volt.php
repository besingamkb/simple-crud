<table border=1 >
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
	</tr>
	<?php foreach ($lists as $list) { ?>
	<tr>
		<td><?php echo $list->id; ?></td>
		<td><?php echo $list->name; ?></td>
		<td><?php echo $list->email; ?></td>
		<td><?php echo $this->tag->linkTo(array($this->url->getBaseUri() . 'index/input/' . $list->id, 'Update')); ?> - <?php echo $this->tag->linkTo(array($this->url->getBaseUri() . 'index/delete/' . $list->id, 'Delete')); ?></td>
	</tr>
	<?php } ?>
</table>
<?php echo $this->tag->linkTo(array($this->url->getBaseUri() . 'index/input', 'Add New')); ?>