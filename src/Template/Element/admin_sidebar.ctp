<div class="actions columns large-2 medium-3">
    <h3><?= __('Admin Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Course Modules'), ['controller' => 'CourseModules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Module'), ['controller' => 'CourseModules', 'action' => 'add']) ?> </li>
    </ul>
</div>