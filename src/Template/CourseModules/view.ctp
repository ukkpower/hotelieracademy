<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Course Module'), ['action' => 'edit', $courseModule->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Course Module'), ['action' => 'delete', $courseModule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courseModule->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Course Modules'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course Module'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses Employees'), ['controller' => 'CoursesEmployees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Courses Employee'), ['controller' => 'CoursesEmployees', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="courseModules view large-10 medium-9 columns">
    <h2><?= h($courseModule->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Course') ?></h6>
            <p><?= $courseModule->has('course') ? $this->Html->link($courseModule->course->name, ['controller' => 'Courses', 'action' => 'view', $courseModule->course->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($courseModule->name) ?></p>
            <h6 class="subheader"><?= __('Type') ?></h6>
            <p><?= h($courseModule->type) ?></p>
            <h6 class="subheader"><?= __('Video Url') ?></h6>
            <p><?= h($courseModule->video_url) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($courseModule->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Video Lenght') ?></h6>
            <p><?= h($courseModule->video_lenght) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related CoursesEmployees') ?></h4>
    <?php if (!empty($courseModule->courses_employees)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Employee Id') ?></th>
            <th><?= __('Course Id') ?></th>
            <th><?= __('Course Module Id') ?></th>
            <th><?= __('Progress') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Completed') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($courseModule->courses_employees as $coursesEmployees): ?>
        <tr>
            <td><?= h($coursesEmployees->id) ?></td>
            <td><?= h($coursesEmployees->employee_id) ?></td>
            <td><?= h($coursesEmployees->course_id) ?></td>
            <td><?= h($coursesEmployees->course_module_id) ?></td>
            <td><?= h($coursesEmployees->progress) ?></td>
            <td><?= h($coursesEmployees->modified) ?></td>
            <td><?= h($coursesEmployees->created) ?></td>
            <td><?= h($coursesEmployees->completed) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'CoursesEmployees', 'action' => 'view', $coursesEmployees->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'CoursesEmployees', 'action' => 'edit', $coursesEmployees->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CoursesEmployees', 'action' => 'delete', $coursesEmployees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coursesEmployees->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
