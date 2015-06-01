<?php echo $this->element('hotel_sidebar'); ?>

<div class="courses view large-10 medium-9 columns">
    <h2><?= h($course->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($course->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($course->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Course Lenght') ?></h6>
            <p><?= h($course->course_lenght) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related CourseFiles') ?></h4>
    <?php if (!empty($course->course_files)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Type') ?></th>
            <th><?= __('Course Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($course->course_files as $courseFiles): ?>
        <tr>
            <td><?= h($courseFiles->id) ?></td>
            <td><?= h($courseFiles->name) ?></td>
            <td><?= h($courseFiles->type) ?></td>
            <td><?= h($courseFiles->course_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'CourseFiles', 'action' => 'view', $courseFiles->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'CourseFiles', 'action' => 'edit', $courseFiles->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CourseFiles', 'action' => 'delete', $courseFiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courseFiles->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related CourseModules') ?></h4>
    <?php if (!empty($course->course_modules)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Course Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Type') ?></th>
            <th><?= __('Video Url') ?></th>
            <th><?= __('Video Lenght') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($course->course_modules as $courseModules): ?>
        <tr>
            <td><?= h($courseModules->id) ?></td>
            <td><?= h($courseModules->course_id) ?></td>
            <td><?= h($courseModules->name) ?></td>
            <td><?= h($courseModules->type) ?></td>
            <td><?= h($courseModules->video_url) ?></td>
            <td><?= h($courseModules->video_lenght) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'CourseModules', 'action' => 'view', $courseModules->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'CourseModules', 'action' => 'edit', $courseModules->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CourseModules', 'action' => 'delete', $courseModules->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courseModules->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Employees') ?></h4>
    <?php if (!empty($course->employees)): ?>
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
        <?php foreach ($course->employees as $employees): ?>
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
