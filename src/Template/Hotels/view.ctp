<?php echo $this->element('hotel_sidebar'); ?>

<div class="hotels view large-10 medium-9 columns">
    <h2><?= h($hotel->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($hotel->name) ?></p>
            <h6 class="subheader"><?= __('Logo') ?></h6>
            <p><?= h($hotel->logo) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($hotel->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($hotel->modified) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($hotel->created) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Employees') ?></h4>
    <?php if (!empty($hotel->employees)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Hotel Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Surname') ?></th>
            <th><?= __('Employee Num') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Created') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($hotel->employees as $employees): ?>
        <tr>
            <td><?= h($employees->id) ?></td>
            <td><?= h($employees->hotel_id) ?></td>
            <td><?= h($employees->name) ?></td>
            <td><?= h($employees->email) ?></td>
            <td><?= h($employees->surname) ?></td>
            <td><?= h($employees->employee_num) ?></td>
            <td><?= h($employees->modified) ?></td>
            <td><?= h($employees->created) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Employees', 'action' => 'view', $employees->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Employees', 'action' => 'edit', $employees->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Employees', 'action' => 'delete', $employees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employees->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
