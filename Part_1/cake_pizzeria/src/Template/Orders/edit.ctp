    <div id="container">
        <div class="darkRedLine"></div>
        <div class="result-title">
            Edit Order : # <?= h($order->id) ?>
        </div>
        <div class="under-line"></div>
        <div class=" body-home">
		
			<ul class="horizontal">
				<li><?= $this->Html->link('Log Out', ['controller' => 'Users', 'action' => 'logout']) ?></li>
				<li><?= $this->Html->link('Order List', ['controller' => 'Orders', 'action' => 'index']) ?></li>				
			</ul>		
		
			<?= $this->Form->create($order, [
				'name'=>'myForm',
				'id'=>'orderForm',
				'class'=>"form-horizontal"
			]); ?>
                <div class="col-sm-6">

                    <h2>Customer Information</h2>

                    <div id="inputs">
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">name</label>
							<?php 
								echo $this->Form->input('name',[
									'templates'=>[
										'inputContainer'=>'<div class="col-sm-9">{{content}}</div>'
									],
									'label'=>false,
									'class'=>'form-control',
									'id'=>'name',
									'readonly'=>'readonly'
								]);
							?>							
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">email</label>
							<?php 
								echo $this->Form->input('email',[
									'templates'=>[
										'inputContainer'=>'<div class="col-sm-9">{{content}}</div>'
									],
									'label'=>false,
									'class'=>'form-control',
									'id'=>'email',
									'placeholder'=>'Enter your email'
								]);
							?>								
                        </div>

                        <div class="form-group">
                            <label for="address1" class="col-sm-3 control-label">Address 1</label>
							<?php 
								echo $this->Form->input('address1',[
									'templates'=>[
										'inputContainer'=>'<div class="col-sm-9">{{content}}</div>'
									],
									'label'=>false,
									'class'=>'form-control',
									'id'=>'address1',
									'placeholder'=>'Address 1'
								]);
							?>								
                        </div>

                        <div class="form-group">
                            <label for="address2" class="col-sm-3 control-label">Address 2</label>
							<?php 
								echo $this->Form->input('address2',[
									'templates'=>[
										'inputContainer'=>'<div class="col-sm-9">{{content}}</div>'
									],
									'label'=>false,
									'class'=>'form-control',
									'id'=>'address2',
									'placeholder'=>'Address 2'
								]);
							?>								
                        </div>

                        <div class="form-group">
                            <label for="city" class="col-sm-3 control-label">City</label>
							<?php 
								echo $this->Form->input('city',[
									'templates'=>[
										'inputContainer'=>'<div class="col-sm-9">{{content}}</div>'
									],
									'label'=>false,
									'class'=>'form-control',
									'id'=>'city',
									'placeholder'=>'City'
								]);
							?>							
                        </div>

                        <div class="form-group">
                            <label for="province" class="col-sm-3 control-label">Province</label>
                            <div class="col-sm-9">
								<?php
									echo $this->Form->select(
										'province',
										[
											'Ontario'=>'Ontario',
											'Quebec'=>'Quebec',
											'Manitoba'=>'Manitoba',
											'Saskatchewan'=>'Saskatchewan'
										],
										['class'=> 'form-control',
										'id'=>'province']
									);							
								?>									
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="postalcode" class="col-sm-3 control-label">Postal Code</label>
							<?php 
								echo $this->Form->input('postalcode',[
									'templates'=>[
										'inputContainer'=>'<div class="col-sm-9">{{content}}</div>'
									],
									'label'=>false,
									'class'=>'form-control',
									'id'=>'postalcode',
									'placeholder'=>'Postal Code'
								]);
							?>								
                        </div>

                        <div class="form-group">
                            <label for="phonenumber" class="col-sm-3 control-label">Phone number</label>
                            <!--
							<div class="col-sm-9">
                                <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone number">
                            </div>
							-->
							<?php 
								echo $this->Form->input('phonenumber',[
									'templates'=>[
										'inputContainer'=>'<div class="col-sm-9">{{content}}</div>'
									],
									'label'=>false,
									'class'=>'form-control',
									'id'=>'phonenumber',
									'placeholder'=>'Phone Number'
								]);
							?>								
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <h2>Order Information</h2>
                    <div class="form-group">
                        <label for="selectpizza" class="col-sm-3 control-label">Select Pizza</label>
                        <div class="col-sm-9">
							<?php
								echo $this->Form->select(
									'selectpizza',
									[
										'Sunny Side Up Pizza'=>'Sunny Side Up Pizza',
										'BBQ Chicken Pizza'=>'BBQ Chicken Pizza',
										'Muffuetta Pizza'=>'Muffuetta Pizza',
										'Margherita Pizza'=>'Margherita Pizza',
										'Caramelized Onion Pizza'=>'Caramelized Onion Pizza',
										'Cheese Calzone'=>'Cheese Calzone',
										'Grilled Pizza'=>'Grilled Pizza',
										'Broccoli Deep Dish Pizza'=>'Broccoli Deep Dish Pizza',
										'Seafood Pizza'=>'Seafood Pizza'
									],
									['class'=> 'form-control',
									'id'=>'selectpizza']
								);							
							?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pizzasize" class="col-sm-3 control-label">Pizza Size</label>
                        <div class="col-sm-9">
							<?php
								echo $this->Form->select(
									'pizzasize',
									[
										'X-Large'=>'X-Large',
										'Large'=>'Large',
										'Medium'=>'Medium',
										'Small'=>'Small'
									],
									['class'=> 'form-control',
									'id'=>'pizzasize']
								);							
							?>							
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Crust type</label>						
						<div class="col-sm-9">
						<?php
							echo $this->Form->radio(
								'crusttype',
								[
									['value'=>'Hand-tossed', 'text'=>' Hand-tossed', 'id'=>'crusttype1', 'hiddenField' => false, 'checked'=>true],
									['value'=>'Pan', 'text'=>' Pan', 'id'=>'crusttype2', 'hiddenField' => false],
									['value'=>'Stuffed', 'text'=>' Stuffed', 'id'=>'crusttype3', 'hiddenField' => false],
									['value'=>'Thin', 'text'=>' Thin', 'id'=>'crusttype4', 'hiddenField' => false],
								],
								[
									'hiddenField'=>false, 
									'label'=>['class'=>'radio-inline']
								]
							);
						?>
						</div>						
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Toppings</label>
                        <div class="radio-inline col-sm-9">	
						<?php
							$toppingString = h($order->toppinglist);
							function isCheckBoxChecked($str, $toppings){
							
								$ary_topping = explode(",", $toppings);
								
								if($toppings !=""){
									for($i = 0 ; $i < count($ary_topping) ; $i++){
										if($ary_topping[$i] == $str){
											return true;
											break;
										}									
									}
									return false;
								}
							}							
						?>
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox1',
								'value'=>'Veggies',
								'multiple'=>'checkbox',
								'checked'=>isCheckBoxChecked('Veggies',$toppingString)
							]);
						?> Veggies
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox2',
								'value'=>'Roma Tomatoes',
								'multiple'=>'checkbox',
								'checked'=>isCheckBoxChecked('Roma Tomatoes',$toppingString)						
							]);
						?> Roma Tomatoes
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox3',
								'value'=>'Red Onions',
								'multiple'=>'checkbox',
								'checked'=>isCheckBoxChecked('Red Onions',$toppingString)						
							]);
						?> Red Onions
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox4',
								'value'=>'Spinach',
								'multiple'=>'checkbox',
								'checked'=>isCheckBoxChecked('Spinach',$toppingString)						
							]);
						?> Spinach
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox5',
								'value'=>'Pineapple',
								'multiple'=>'checkbox',
								'checked'=>isCheckBoxChecked('Pineapple',$toppingString)						
							]);
						?> Pineapple
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox6',
								'value'=>'Brocooli',
								'multiple'=>'checkbox',
								'checked'=>isCheckBoxChecked('Brocooli',$toppingString)						
							]);
						?> Brocooli
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox7',
								'value'=>'Meats',
								'multiple'=>'checkbox',
								'checked'=>isCheckBoxChecked('Meats',$toppingString)						
							]);
						?> Meats
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox8',
								'value'=>'Anchovies',
								'multiple'=>'checkbox',
								'checked'=>isCheckBoxChecked('Anchovies',$toppingString)						
							]);
						?> Anchovies
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox9',
								'value'=>'Bacon Crumble',
								'multiple'=>'checkbox',
								'checked'=>isCheckBoxChecked('Bacon Crumble',$toppingString)						
							]);
						?> Bacon Crumble
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox10',
								'value'=>'Chicken',
								'multiple'=>'checkbox',
								'checked'=>isCheckBoxChecked('Chicken',$toppingString)					
							]);
						?> Chicken
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox11',
								'value'=>'Feta Cheese',
								'multiple'=>'checkbox',
								'checked'=>isCheckBoxChecked('Feta Cheese',$toppingString)						
							]);
						?> Feta Cheese
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox12',
								'value'=>'Mozzarella',
								'multiple'=>'checkbox',
								'checked'=>isCheckBoxChecked('Mozzarella',$toppingString)						
							]);
						?> Mozzarella
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox13',
								'value'=>'Hot Sauce',
								'multiple'=>'checkbox',
								'checked'=>isCheckBoxChecked('Hot Sauce',$toppingString)						
							]);
						?> Hot Sauce
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox14',
								'value'=>'BBQ Sauce',
								'multiple'=>'checkbox',
								'checked'=>isCheckBoxChecked('BBQ Sauce',$toppingString)						
							]);
						?> BBQ Sauce
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox15',
								'value'=>'Tomato Sauce',
								'multiple'=>'checkbox',
								'checked'=>isCheckBoxChecked('Tomato Sauce',$toppingString)						
							]);
						?> Tomato Sauce
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox16',
								'value'=>'Chill Sauce',
								'multiple'=>'checkbox',
								'checked'=>isCheckBoxChecked('Chill Sauce',$toppingString)						
							]);
						?> Chill Sauce	
						<div style="display:none;">
							<input id="chkvalue" type="hidden" name="toppinglist" value=""/>
						</div>
                        </div>
                    </div>	
					
					<div class="form-group">
						<label for="status" class="col-sm-3 control-label">Status</label>
						<div class="col-sm-9">
							<?php
								echo $this->Form->select(
									'status',
									[
										'working'=>'working',
										'complete'=>'complete'
									],
									['class'=> 'form-control',
									'id'=>'status']
								);							
							?>							
						</div>
					</div>
					
                </div>
				


                <div class="form-group" id="controls">
                    <div class="col-sm-offset-2 col-sm-9">					
						<?php
							echo $this->Form->button('Edit', 
							[
								'type'=>'button', 
								'class'=>'btn btn-primary',
								'id'=>'order',
								'name'=>'Edit'							
							]);
						?>
                    </div>
                </div>
			<?= $this->Form->end() ?>
        </div>
		<!--
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
		-->
    </div>