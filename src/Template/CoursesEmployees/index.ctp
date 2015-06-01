<?php echo $this->element('employee_sidebar'); ?>

<div class="coursesEmployees index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('employee_id') ?></th>
            <th><?= $this->Paginator->sort('course_id') ?></th>
            <th><?= $this->Paginator->sort('course_module_id') ?></th>
            <th><?= $this->Paginator->sort('progress') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($coursesEmployees as $coursesEmployee): ?>
        <tr>
            <td><?= $this->Number->format($coursesEmployee->id) ?></td>
            <td>
                <?= $coursesEmployee->has('employee') ? $this->Html->link($coursesEmployee->employee->name, ['controller' => 'Employees', 'action' => 'view', $coursesEmployee->employee->id]) : '' ?>
            </td>
            <td>
                <?= $coursesEmployee->has('course') ? $this->Html->link($coursesEmployee->course->name, ['controller' => 'Courses', 'action' => 'view', $coursesEmployee->course->id]) : '' ?>
            </td>
            <td>
                <?= $coursesEmployee->has('course_module') ? $this->Html->link($coursesEmployee->course_module->name, ['controller' => 'CourseModules', 'action' => 'view', $coursesEmployee->course_module->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($coursesEmployee->progress) ?></td>
            <td><?= h($coursesEmployee->modified) ?></td>
            <td><?= h($coursesEmployee->created) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $coursesEmployee->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coursesEmployee->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coursesEmployee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coursesEmployee->id)]) ?>
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
