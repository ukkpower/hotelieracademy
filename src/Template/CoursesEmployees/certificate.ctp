<?php echo $this->element('hotel_sidebar'); ?>

<div class="coursesEmployees index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('employee_id') ?></th>
            <th><?= $this->Paginator->sort('course_id') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th>Download</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($coursesEmployees as $coursesEmployee): ?>
        <tr>
            <td>
                <?= $coursesEmployee->has('employee') ? $this->Html->link($coursesEmployee->employee->name, ['controller' => 'Employees', 'action' => 'view', $coursesEmployee->employee->id]) : '' ?>
            </td>
            <td>
                <?= $coursesEmployee->has('course') ? $this->Html->link($coursesEmployee->course->name, ['controller' => 'Courses', 'action' => 'view', $coursesEmployee->course->id]) : '' ?>
            </td>
            <td><?= h($coursesEmployee->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Download'), ['action' => 'downloadCertificate', $coursesEmployee->id]) ?>
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
