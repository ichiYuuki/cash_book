<div class="payees view">
<h2><?php echo __('Payee'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($payee['Payee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($payee['Payee']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($payee['Payee']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payee Name'); ?></dt>
		<dd>
			<?php echo h($payee['Payee']['payee_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Payee'), array('action' => 'edit', $payee['Payee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Payee'), array('action' => 'delete', $payee['Payee']['id']), array(), __('Are you sure you want to delete # %s?', $payee['Payee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Payees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payee'), array('action' => 'add')); ?> </li>
	</ul>
</div>
