    <div id="container">
        <div class="darkRedLine"></div>
        <div class="result-title">
            Order List 
        </div>
        <div class="under-line"></div>
        <div class=" body-home">

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orders index large-9 medium-8 columns content">
    <h3><?= __('Orders') ?></h3>
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
        <div class="BottomLine"></div>
        <div class="bottom-title">
            <div class="col-sm-9 bottom-left">Conestoga Pizzeria &copy; 2015 / Web Technologies</div>
            <div class="col-sm-3">
                <ul id="menulist">
                    <li class="menuitem">
                        <a href="http://www.conestogac.on.ca/"><img src="/img/facebook.png" alt="Facebook"></a>
                    </li>
                    <li class="menuitem">
                        <a href="http://www.conestogac.on.ca/"><img src="/img/twitter.png" alt="Twitter"></a>
                    </li>
                    <li class="menuitem">
                        <a href="http://www.conestogac.on.ca/"><img src="/img/youtube.png" alt="You Tube"></a>
                    </li>
                </ul>
            </div>
        </div>			
	</div>