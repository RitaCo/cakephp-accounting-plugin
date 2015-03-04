<li>
	<a href="<?= $this->Url->build(['plugin' => 'Rita/Accounting', 'controller' =>'DashBoard','action' => 'index'])?>">
		<div class="icon"><i class="  icon-money-cash"></i></div>
		<div class="label"><span>حسابداری</span></div>
	</a>
    <ul class="menu-submenu">
		<li>
			<a href="<?= $this->Url->build(['plugin' => 'Rita/Accounting', 'controller' =>'Accounts','action' => 'found'])?>">
				<div class="icon"><i class=" icon-money-cash"></i></div>
				<div class="label"><span>صندوق</span></div>
			</a>
		</li>
	   

	</ul>								                            
</li>