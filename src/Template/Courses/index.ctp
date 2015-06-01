<?php echo $this->element('hotel_sidebar'); ?>

<div class="courses index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th>Name</th>
            <th>Course Lenght</th>
            <th>Modules</th>
            <th class="actions">Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($courses as $course): ?>
        <tr>
            <td><?= h($course->name) ?></td>
            <td><?= h($course->course_lenght) ?></td>
            <td><?= count($course->course_modules) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $course->id]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
</div>
