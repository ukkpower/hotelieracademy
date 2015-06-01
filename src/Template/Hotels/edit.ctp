<?php echo $this->element('hotel_sidebar'); ?>

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
