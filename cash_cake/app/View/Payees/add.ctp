<div class="payees form">
<?php echo $this->Form->create('Payee'); ?>
	<fieldset>
		<legend><?php echo __('Add Payee'); ?></legend>
	<?php
		echo $this->Form->input('payee_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Payees'), array('action' => 'index')); ?></li>
	</ul>
</div>
