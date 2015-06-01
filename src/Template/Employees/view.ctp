<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="employees view large-10 medium-9 columns">
    <h2><?= h($employee->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $employee->has('user') ? $this->Html->link($employee->user->email, ['controller' => 'Users', 'action' => 'view', $employee->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Hotel') ?></h6>
            <p><?= $employee->has('hotel') ? $this->Html->link($employee->hotel->name, ['controller' => 'Hotels', 'action' => 'view', $employee->hotel->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($employee->name) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($employee->email) ?></p>
            <h6 class="subheader"><?= __('Surname') ?></h6>
            <p><?= h($employee->surname) ?></p>
            <h6 class="subheader"><?= __('Employee Num') ?></h6>
            <p><?= h($employee->employee_num) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($employee->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($employee->modified) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($employee->created) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Courses') ?></h4>
    <?php if (!empty($employee->courses)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Course Lenght') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($employee->courses as $courses): ?>
        <tr>
            <td><?= h($courses->id) ?></td>
            <td><?= h($courses->name) ?></td>
            <td><?= h($courses->course_lenght) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Courses', 'action' => 'view', $courses->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Courses', 'action' => 'edit', $courses->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Courses', 'action' => 'delete', $courses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courses->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
