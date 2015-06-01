<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $courseModule->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $courseModule->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Course Modules'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses Employees'), ['controller' => 'CoursesEmployees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Courses Employee'), ['controller' => 'CoursesEmployees', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="courseModules form large-10 medium-9 columns">
    <?= $this->Form->create($courseModule); ?>
    <fieldset>
        <legend><?= __('Edit Course Module') ?></legend>
        <?php
            echo $this->Form->input('course_id', ['options' => $courses]);
            echo $this->Form->input('name');
            echo $this->Form->input('type');
            echo $this->Form->input('video_url');
            echo $this->Form->input('video_lenght');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
