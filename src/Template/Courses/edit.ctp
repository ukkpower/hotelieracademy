<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $course->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Course Files'), ['controller' => 'CourseFiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course File'), ['controller' => 'CourseFiles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Course Modules'), ['controller' => 'CourseModules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course Module'), ['controller' => 'CourseModules', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="courses form large-10 medium-9 columns">
    <?= $this->Form->create($course); ?>
    <fieldset>
        <legend><?= __('Edit Course') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('course_lenght');
            echo $this->Form->input('employees._ids', ['options' => $employees]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
