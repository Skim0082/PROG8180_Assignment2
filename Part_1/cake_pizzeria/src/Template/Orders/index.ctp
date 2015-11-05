    <div id="container" class="bodyblock">
        <div class="darkRedLine"></div>
        <div class="result-title">
            Order List 
        </div>
        <div class="under-line"></div>
        <div class=" body-home">
			
				<ul class="horizontal">
					
					<li><?= $this->Html->link('Log Out', ['controller' => 'Users', 'action' => 'logout']) ?></li>
					<li><?= $this->Html->link('New Order', ['controller' => 'Orders', 'action' => 'add']) ?></li>
				</ul>

				<h3>Order List</h3>
				<table>
					<thead>
						<tr>
							<th><?= $this->Paginator->sort('id') ?></th>
							<th><?= $this->Paginator->sort('name') ?></th>
							<th><?= $this->Paginator->sort('email') ?></th>
							<th><?= $this->Paginator->sort('address1') ?></th>
							<th><?= $this->Paginator->sort('address2') ?></th>
							<th><?= $this->Paginator->sort('city') ?></th>
							<th><?= $this->Paginator->sort('province') ?></th>
							<th><?= $this->Paginator->sort('status') ?></th>
							<th class="actions"><?= __('Actions') ?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($orders as $order): ?>
						<tr>
							<td><?= $this->Number->format($order->id) ?></td>
							<td><?= h($order->name) ?></td>
							<td><?= h($order->email) ?></td>
							<td><?= h($order->address1) ?></td>
							<td><?= h($order->address2) ?></td>
							<td><?= h($order->city) ?></td>
							<td><?= h($order->province) ?></td>
							<td><?= h($order->status) ?></td>
							<td class="actions">
								<?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?>
								<?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]) ?>
								<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<div class="paginator">
					<ul class="pagination">
						<?= $this->Paginator->prev('< ' . __('previous')) ?>
						<?= $this->Paginator->numbers() ?>
						<?= $this->Paginator->next(__('next') . ' >') ?>
					</ul>
					<p><?= $this->Paginator->counter() ?></p>
				</div>

        </div>
			
	</div>