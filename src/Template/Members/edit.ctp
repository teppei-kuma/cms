<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $member
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $member->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Members'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="members form large-9 medium-8 columns content">
    <?= $this->Form->create($member) ?>
    <fieldset>
        <legend><?= __('Edit Member') ?></legend>
        <?php
            echo $this->Form->control('idcode');
            echo $this->Form->control('name');
            echo $this->Form->select('use_mode', [
            '0' => '通常',
            '1' => '一時',
            '2' => '退会'
        ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
