<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $hotel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $hotel->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Hotels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="hotels form large-10 medium-9 columns">
    <?= $this->Form->create($hotel); ?>
    <fieldset>
        <legend><?= __('Edit Hotel') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('logo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
