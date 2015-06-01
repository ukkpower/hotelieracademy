<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="employees index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('hotel_id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('surname') ?></th>
            <th><?= $this->Paginator->sort('employee_num') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($employees as $employee): ?>
        <tr>
            <td><?= $this->Number->format($employee->id) ?></td>
            <td>
                <?= $employee->has('user') ? $this->Html->link($employee->user->email, ['controller' => 'Users', 'action' => 'view', $employee->user->id]) : '' ?>
            </td>
            <td>
                <?= $employee->has('hotel') ? $this->Html->link($employee->hotel->name, ['controller' => 'Hotels', 'action' => 'view', $employee->hotel->id]) : '' ?>
            </td>
            <td><?= h($employee->name) ?></td>
            <td><?= h($employee->email) ?></td>
            <td><?= h($employee->surname) ?></td>
            <td><?= h($employee->employee_num) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $employee->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employee->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?>
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
