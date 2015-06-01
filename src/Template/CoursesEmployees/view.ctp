<?php echo $this->element('admin_sidebar'); ?>

<div class="coursesEmployees view large-10 medium-9 columns">
    <h2><?= h($coursesEmployee->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Employee') ?></h6>
            <p><?= $coursesEmployee->has('employee') ? $this->Html->link($coursesEmployee->employee->name, ['controller' => 'Employees', 'action' => 'view', $coursesEmployee->employee->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Course') ?></h6>
            <p><?= $coursesEmployee->has('course') ? $this->Html->link($coursesEmployee->course->name, ['controller' => 'Courses', 'action' => 'view', $coursesEmployee->course->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Course Module') ?></h6>
            <p><?= $coursesEmployee->has('course_module') ? $this->Html->link($coursesEmployee->course_module->name, ['controller' => 'CourseModules', 'action' => 'view', $coursesEmployee->course_module->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($coursesEmployee->id) ?></p>
            <h6 class="subheader"><?= __('Progress') ?></h6>
            <p><?= $this->Number->format($coursesEmployee->progress) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($coursesEmployee->modified) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($coursesEmployee->created) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Completed') ?></h6>
            <p><?= $coursesEmployee->completed ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
