<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Course File'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="courseFiles index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('type') ?></th>
            <th><?= $this->Paginator->sort('course_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($courseFiles as $courseFile): ?>
        <tr>
            <td><?= $this->Number->format($courseFile->id) ?></td>
            <td><?= h($courseFile->name) ?></td>
            <td><?= h($courseFile->type) ?></td>
            <td>
                <?= $courseFile->has('course') ? $this->Html->link($courseFile->course->name, ['controller' => 'Courses', 'action' => 'view', $courseFile->course->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $courseFile->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $courseFile->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $courseFile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courseFile->id)]) ?>
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
