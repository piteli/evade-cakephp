<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Grand Totals'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="grandTotals form large-9 medium-8 columns content">
    <?= $this->Form->create($grandTotal) ?>
    <fieldset>
        <legend><?= __('Add Grand Total') ?></legend>
        <?php
            echo $this->Form->input('Gtotal_total');
            echo $this->Form->input('Super_total');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
