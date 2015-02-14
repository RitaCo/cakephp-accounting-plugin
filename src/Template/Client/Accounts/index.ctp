<?php

$this->assign('title','کیف پول من');


?>

<?php

foreach($accounts as $account):

?>
<div  class="ui-panel-border" style="width: 400px; margin: 20px auto;">

    <div class="panel-body padding-none">
        <div class="body-container ">
                <div class="ui-list-items">
                <section class="list-row">
                    <div>شماره حساب</div><div><?= $account->number; ?></div>
                </section>
                <section class="list-row">
                    <div>نوح حساب</div><div><?= $account->title; ?></div>
                </section>
                <section class="list-row">
                    <div>موجودی</div><div><?= p($account->amount); ?> تومان</div>
                </section>            
                <section class="list-row">
                    <div>وضعیت</div><div><?= p($account->status); ?> تومان</div>
                </section>            
            </div>
        </div>
        <div class="body-footer ">
                    <?= $this->Html->linkIcon('تراکنش',' icon-report',['controller' => 'transcations', $account->id],['class' => 'btn ']); ?>
        </div>
    </div>
</div>

<?php endforeach;?>