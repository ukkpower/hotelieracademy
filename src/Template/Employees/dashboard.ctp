<?php echo $this->element('employee_sidebar'); ?>

<div class="employees index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('hotel_id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('surname') ?></th>
            <th><?= $this->Paginator->sort('employee_num') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($employees as $employee): ?>
        <tr>
            <td><?= $this->Number->format($employee->id) ?></td>
            <td>
                <?= $employee->has('hotel') ? $this->Html->link($employee->hotel->name, ['controller' => 'Hotels', 'action' => 'view', $employee->hotel->id]) : '' ?>
            </td>
            <td><?= h($employee->name) ?></td>
            <td><?= h($employee->email) ?></td>
            <td><?= h($employee->surname) ?></td>
            <td><?= h($employee->employee_num) ?></td>
            <td><?= h($employee->modified) ?></td>
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
