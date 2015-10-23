<!-- src/Template/Users/add.ctp -->

    <div id="container" class="bodyblock">
        <div class="darkRedLine"></div>
        <div class="result-title">
            Sign Up 
        </div>
        <div class="under-line"></div>
        <div class=" body-home">
		
			<ul class="horizontal">
				<li><?= $this->Html->link('Log In', ['controller' => 'Users', 'action' => 'login']) ?></li>	
				<li> </li>
			</ul>
			
			<p>
			<?= $this->Form->create($user) ?>
				<fieldset>
					<legend><?= __('Add User') ?></legend>
					<?= $this->Form->input('username') ?>
					<?= $this->Form->input('password') ?>
					<div style="display:none;">
					<?= $this->Form->input('role', [
						'options' => ['admin' => 'Admin', 'staff' => 'Staff']
					]) ?>
					</div>
			   </fieldset>
				<?php
					echo $this->Form->button('Submit', 
					[
						'type'=>'submit', 
						'class'=>'btn btn-primary',
						'id'=>'signup',
						'name'=>'signup'							
					]);
				?>	
				
			<?= $this->Form->end() ?>
			</p>
		</div>
	</div>