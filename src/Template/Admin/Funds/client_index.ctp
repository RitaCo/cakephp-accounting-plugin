<?php


   $this->assign('title', 'مدیریت /  حسابداری / صندوق');
   $this->assign('note', 'شما در حال مشاهده صندوق حسابداری هستید');


?>

<div id="TotalFound">
    <span>موجودی شما در صندوق</span>
    
    <p>
        <?= p($CashBalance); ?>
    </p>
    <span>تومان می باشد</span>
</div>