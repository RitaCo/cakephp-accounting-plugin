<div  class="ui-panel-framed" style="width: 400px; margin: 20px auto;">

    <div class="panel-body padding-none">
        <?= $this->Form->create($payment); ?>
        <div class="body-container padding-none ">
            <?= $this->Form->input('value', ['label' => 'مبلغ']); ?>
            <?= $this->Form->input('bank_id', ['label' => 'درگاه', 'options' => [2 => 'بانک ملت']]); ?>
        </div>
        <div class="body-footer ">
            <?= $this->Form->submit('پرداخت'); ?>
        </div>
        <?= $this->Form->end(); ?>
    </div>
</div>