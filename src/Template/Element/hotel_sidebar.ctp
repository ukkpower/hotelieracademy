<div class="actions columns large-2 medium-3">
    <h3><?= __('Hotel Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Dashboard'), ['controller' => 'Hotels', 'action' => 'dashboard']) ?> </li>
        <li><?= $this->Html->link(__('Hotel Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Certificates'), ['controller' => 'CoursesEmployees', 'action' => 'certificate']) ?> </li>
        <li><?= $this->Html->link(__('Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
    </ul>
</div>