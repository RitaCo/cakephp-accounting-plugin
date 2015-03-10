<li>
	<a href="<?= $this->Url->build(['plugin' => 'Rita/Accounting', 'controller' =>'DashBoard','action' => 'index'])?>">
		<div class="icon"><i class="  icon-money-cash"></i></div>
		<div class="label"><span>حسابداری</span></div>
	</a>

    <ul class="menu-submenu">
    	<li>
    		<a href="#">
    			<div class="icon"><i class=" icon-money-cash"></i></div>
    			<div class="label"><span>صندوق</span></div>
    		</a>
            <ul class="menu-submenu">
            	<li>
            		<a href="<?= $this->Url->build(['plugin' => 'Rita/Accounting', 'controller' =>'Funds','type' => 'system','action' => 'index'])?>">
            			<div class="icon"><i class=" icon-money-cash"></i></div>
            			<div class="label"><span>سیستم</span></div>
            		</a>
            	</li>
                <!--
            	<li>
                 
            		<a href="<?= $this->Url->build(['plugin' => 'Rita/Accounting', 'controller' =>'Funds','type' => 'client','action' => 'index'])?>">
            			<div class="icon"><i class=" icon-money-cash"></i></div>
            			<div class="label"><span>صندوق</span></div>
            		</a>
            	</li>
                 -->
            </ul>
    	</li>
    	<li>
    		<a href="<?= $this->Url->build(['plugin' => 'Rita/Accounting', 'controller' =>'Banks','action' => 'index'])?>">
    			<div class="icon"><i class=" icon-money-cash"></i></div>
    			<div class="label"><span>بانک ها</span></div>
    		</a>
    	</li>
    	<li>
    		<a href="<?= $this->Url->build(['plugin' => 'Rita/Accounting', 'controller' =>'Wallets','action' => 'index'])?>">
    			<div class="icon"><i class="icon-money-cash"></i></div>
    			<div class="label"><span>کیف پول</span></div>
    		</a>
    	</li>
    </ul>								                            

								                            
</li>