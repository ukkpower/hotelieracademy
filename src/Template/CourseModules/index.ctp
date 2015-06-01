<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Course Module'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses Employees'), ['controller' => 'CoursesEmployees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Courses Employee'), ['controller' => 'CoursesEmployees', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="courseModules index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('course_id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('type') ?></th>
            <th><?= $this->Paginator->sort('video_url') ?></th>
            <th><?= $this->Paginator->sort('video_lenght') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($courseModules as $courseModule): ?>
        <tr>
            <td><?= $this->Number->format($courseModule->id) ?></td>
            <td>
                <?= $courseModule->has('course') ? $this->Html->link($courseModule->course->name, ['controller' => 'Courses', 'action' => 'view', $courseModule->course->id]) : '' ?>
            </td>
            <td><?= h($courseModule->name) ?></td>
            <td><?= h($courseModule->type) ?></td>
            <td><?= h($courseModule->video_url) ?></td>
            <td><?= h($courseModule->video_lenght) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $courseModule->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $courseModule->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $courseModule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courseModule->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
