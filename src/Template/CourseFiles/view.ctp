<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Course File'), ['action' => 'edit', $courseFile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Course File'), ['action' => 'delete', $courseFile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courseFile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Course Files'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course File'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="courseFiles view large-10 medium-9 columns">
    <h2><?= h($courseFile->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($courseFile->name) ?></p>
            <h6 class="subheader"><?= __('Type') ?></h6>
            <p><?= h($courseFile->type) ?></p>
            <h6 class="subheader"><?= __('Course') ?></h6>
            <p><?= $courseFile->has('course') ? $this->Html->link($courseFile->course->name, ['controller' => 'Courses', 'action' => 'view', $courseFile->course->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($courseFile->id) ?></p>
        </div>
    </div>
</div>
