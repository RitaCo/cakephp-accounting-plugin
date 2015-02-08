<?php

$this->assign('title','مدیریت / حسابداری و امور مالی');
$this->assign('note','تمامی عملیات‌های مالی در این بخش در دسترس شما می‌باشد.');

?>




<div id="ActionInDashBoard">

    <?= $this->Html->linkIcon('اعضا','  fa fa-users',['controller' => 'Notices']); ?>
    <?= $this->Html->linkIcon('نقش‌ها','  icon-list-alt',['controller' => 'Notices']); ?>
    <?= $this->Html->linkIcon('تنظیمات','  icon-list-alt',['controller' => 'Notices']); ?>

</div>


<div class="com-layout-columns col2">
    <div class="layout-cell">
        <div class="ui-box">
            <div class="box-caption">گزارش سریع</div>
            
            <div class="box-body">
            
               گزارشی ارايه نشده است
            </div>
        </div>
    
    </div>
    <div class="layout-cell">
        <div class="ui-box">
            <div class="box-caption">آمار و ارقام</div>
            
            <div class="box-body">
            
            گزارشی ارايه نشده است
            </div>
        </div>
    </div>

</div>