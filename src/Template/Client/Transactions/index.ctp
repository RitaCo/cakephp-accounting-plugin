<?php

use \Cake\Routing\Router;
use \Rita\Tools\I18n\Time;
Time::$gregorianCalendar = false;

?>
<?= $this->element('pagintor'); ?>


<div class="ui-panel-framed ">
	<div class="panel-header bg-flat">
		<div class="header-caption">فهرست</div>
	</div>
	<div class="panel-body padding-none ">
		<div class="body-header padding-none">
			<div class="ui-toolbar">
				<div class="toolbar-band ">
					<a class="btn" href="<?= Router::url(['_name' => 'Accounting'])?>">	
						<i class=" icon-pageforward"></i>
						<span>بازگشت</span>
					</a>
					
				</div>
			</div>
		</div>
		<div class="body-splitter"></div>
		<div class="body-container padding-none">
            <div class="ui-dataGrid">
                <table >
                    <thead class="">
                        <?php
                        
                        echo $this->Html->tableHeaders([
                        ['تراکنش'=>['width' => '100px']],
                        ['مبدا' =>['width' => '100px']] ,
                        ['مقصد' => ['width' => '100px']] ,
                        ['تاریخ' => ['width' => '200px']] ,
                        'واریز' ,
                        'برداشت',
                        'موجودی' ,
                        ['وضعیت' => ['width' => '100px']]
                        ]);
                        
                        ?>
                    </thead>
                    <tbody class="">
                        <?php
                        foreach($transactions as $transaction ){
                            echo $this->Html->tableCells([
                                p($transaction->id),
                                'w.'.$transaction->transmitter_id,
                                'w.'.$transaction->getter_id,
                                (new Time($transaction->created))->i18nFormat("[HH:mm:ss]-[YYYY/MM/dd]",'Asia/Tehran','fa_IR@calendar=persian'),
                                p($transaction->amount_in),
                                p($transaction->amount_out),
                                p($transaction->amount_total),
                                p($transaction->status),
                            ]);
                        }
?>
                    </tbody>
                </table>
            </div>
		
		
		</div>
	</div>
</div>


<?= $this->element('pagintor'); ?>