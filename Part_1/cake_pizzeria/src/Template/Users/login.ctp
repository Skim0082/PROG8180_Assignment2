    <div id="container">
        <div class="darkRedLine"></div>
        <div class="result-title">
            Sign In 
        </div>
        <div class="under-line"></div>
        <div class=" body-home">
		
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
        <div class="BottomLine"></div>
        <div class="bottom-title">
            <div class="col-sm-9 bottom-left">Conestoga Pizzeria &copy; 2015 / Web Technologies</div>
            <div class="col-sm-3">
                <ul id="menulist">
                    <li class="menuitem">
                        <a href="http://www.conestogac.on.ca/"><img src="/img/facebook.png" alt="Facebook"></a>
                    </li>
                    <li class="menuitem">
                        <a href="http://www.conestogac.on.ca/"><img src="/img/twitter.png" alt="Twitter"></a>
                    </li>
                    <li class="menuitem">
                        <a href="http://www.conestogac.on.ca/"><img src="/img/youtube.png" alt="You Tube"></a>
                    </li>
                </ul>
            </div>
        </div>			
	</div>