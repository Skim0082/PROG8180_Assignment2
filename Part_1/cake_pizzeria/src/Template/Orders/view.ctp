<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orders view large-9 medium-8 columns content">
    <h3><?= h($order->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($order->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($order->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Address1') ?></th>
            <td><?= h($order->address1) ?></td>
        </tr>
        <tr>
            <th><?= __('Address2') ?></th>
            <td><?= h($order->address2) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($order->city) ?></td>
        </tr>
        <tr>
            <th><?= __('Province') ?></th>
            <td><?= h($order->province) ?></td>
        </tr>
        <tr>
            <th><?= __('Postalcode') ?></th>
            <td><?= h($order->postalcode) ?></td>
        </tr>
        <tr>
            <th><?= __('Phonenumber') ?></th>
            <td><?= h($order->phonenumber) ?></td>
        </tr>
        <tr>
            <th><?= __('Selectpizza') ?></th>
            <td><?= h($order->selectpizza) ?></td>
        </tr>
        <tr>
            <th><?= __('Pizzasize') ?></th>
            <td><?= h($order->pizzasize) ?></td>
        </tr>
        <tr>
            <th><?= __('Crusttype') ?></th>
            <td><?= h($order->crusttype) ?></td>
        </tr>
        <tr>
            <th><?= __('Toppinglist') ?></th>
            <td><?= h($order->toppinglist) ?></td>
        </tr>
        <tr>
            <th><?= __('User Type') ?></th>
            <td><?= h($order->user_type) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($order->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($order->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($order->modified) ?></tr>
        </tr>
    </table>
</div>
