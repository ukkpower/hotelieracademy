<div class="actions columns large-2 medium-3">
    <h3><?= __('Employee Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Dashboard'), ['controller' => 'Employees', 'action' => 'dashboard']) ?> </li>
        <li><?= $this->Html->link(__('Courses'), ['controller' => 'CoursesEmployees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Certificates'), ['controller' => 'CoursesEmployees', 'action' => 'myCertificate']) ?> </li>
        <li><?= $this->Html->link(__('Profile'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
    </ul>
</div>