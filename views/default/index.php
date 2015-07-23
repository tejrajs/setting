<div class="setting-default-index">
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#home">Email Configuration</a></li>
		<li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
		<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
	</ul>

	<div class="tab-content">
		<div id="home" class="tab-pane fade in active">
			<?=$this->render('_email',['model' => $model]);?>
		</div>
		<div id="menu1" class="tab-pane fade">
			<h3>Menu 1</h3>
			<p>Some content in menu 1.</p>
		</div>
		<div id="menu2" class="tab-pane fade">
			<h3>Menu 2</h3>
			<p>Some content in menu 2.</p>
		</div>
	</div>
</div>
