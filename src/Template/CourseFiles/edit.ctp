<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $courseFile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $courseFile->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Course Files'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="courseFiles form large-10 medium-9 columns">
    <?= $this->Form->create($courseFile); ?>
    <fieldset>
        <legend><?= __('Edit Course File') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('type');
            echo $this->Form->input('course_id', ['options' => $courses]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
