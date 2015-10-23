    <div id="container" class="bodyblock">
        <div class="darkRedLine"></div>
        <div class="result-title">
            Sign In 
        </div>
        <div class="under-line"></div>
        <div class=" body-home">
		
			<ul class="horizontal">
				<li><?= $this->Html->link('New Order', ['controller' => 'Orders', 'action' => 'add']) ?></li>				
			</ul>			
		
			<legend><?= __('Please enter your username and password') ?></legend>

				<?= $this->Flash->render('auth') ?>
				<?= $this->Form->create($user, [
					'name'=>'myForm',
					'id'=>'loginForm',
					'class'=>'form-horizontal'
				]); ?>

			<div class="form-group">
				<label for="inputUsername" class="col-sm-2 control-label">User name</label>
				<?php 
					echo $this->Form->input('username',[
						'templates'=>[
							'inputContainer'=>'<div class="col-sm-10">{{content}}</div>'
						],
						'label'=>false,
						'type'=>'text',
						'class'=>'form-control',
						'id'=>'inputUsername',
						'placeholder'=>'User name'
					]);
				?>	  
			</div>
			<div class="form-group">
				<label for="inputPassword" class="col-sm-2 control-label">Password</label>
				<?php 
					echo $this->Form->input('password',[
						'templates'=>[
							'inputContainer'=>'<div class="col-sm-10">{{content}}</div>'
						],
						'label'=>false,
						'type'=>'password',
						'class'=>'form-control',
						'id'=>'inputPassword',
						'placeholder'=>'Password'
					]);
				?>		  
			</div>
			
			<div class="form-group">
				
				<div class="col-sm-offset-2 col-sm-10">
				<p> 
				<?php
					echo $this->Form->button('Sign in', 
					[
						'type'=>'submit', 
						'class'=>'btn btn-primary',
						'id'=>'signin',
						'name'=>'login'							
					]);
				?>	
				</p>		
				</div>
				
			</div>
			<?= $this->Form->end() ?>
			
        </div>
			
	</div>