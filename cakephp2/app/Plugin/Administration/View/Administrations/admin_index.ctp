<div class="administrations index">
	<h2><?php echo __('Administrations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('field1'); ?></th>
			<th><?php echo $this->Paginator->sort('field2'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($administrations as $administration): ?>
	<tr>
		<td><?php echo h($administration['Administration']['id']); ?>&nbsp;</td>
		<td><?php echo h($administration['Administration']['field1']); ?>&nbsp;</td>
		<td><?php echo h($administration['Administration']['field2']); ?>&nbsp;</td>
		<td><?php echo h($administration['Administration']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($administration['Administration']['updated_by']); ?>&nbsp;</td>
		<td><?php echo h($administration['Administration']['created']); ?>&nbsp;</td>
		<td><?php echo h($administration['Administration']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $administration['Administration']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $administration['Administration']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $administration['Administration']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $administration['Administration']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Administration'), array('action' => 'add')); ?></li>
	</ul>
</div>