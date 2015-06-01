<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Courses Employees'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Course Modules'), ['controller' => 'CourseModules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course Module'), ['controller' => 'CourseModules', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="coursesEmployees form large-10 medium-9 columns">
    <?= $this->Form->create($coursesEmployee); ?>
    <fieldset>
        <legend><?= __('Add Courses Employee') ?></legend>
        <?php
            echo $this->Form->input('employee_id', ['options' => $employees]);
            echo $this->Form->input('course_id', ['options' => $courses]);
            echo $this->Form->input('course_module_id', ['options' => $courseModules]);
            echo $this->Form->input('progress');
            echo $this->Form->input('completed');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
