<?php if ($a != $empty) { ?>
	<?php echo $this->tag->form(array('index/update/' . $a->id, 'mehthod' => 'post')); ?>
	Name: <?php echo $this->tag->textField(array('name', 'value' => $a->name)) . '<br>'; ?>
	Email: <?php echo $this->tag->emailField(array('email', 'value' => $a->email)) . '<br>'; ?>
	<?php echo $this->tag->submitButton(array('Update')); ?> - <?php echo $this->tag->linkTo(array($this->url->getBaseUri() . 'index/list', 'View List')); ?>
<?php } else { ?>
	<?php echo $this->tag->form(array('index/addNew', 'mehthod' => 'post')); ?>
	Name: <?php echo $this->tag->textField(array('name')) . '<br>'; ?>
	Email: <?php echo $this->tag->emailField(array('email')) . '<br>'; ?>
	<?php echo $this->tag->submitButton(array('add')); ?> - <?php echo $this->tag->linkTo(array($this->url->getBaseUri() . 'index/list', 'View List')); ?>
<?php } ?>
	
</form>