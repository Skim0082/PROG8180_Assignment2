    <div id="container">
        <div class="darkRedLine"></div>
        <div class="top-title">
            Welcome to Conestoga Pizzeria!
        </div>
        <img alt="logo" src="/img/pizza01.png" />
        <div class="under-line"></div>
        <div class=" body-home">
            <!--
			<form class="form-horizontal" id="myForm" name="myForm" onsubmit="return validateForm()" action="submit.php" method="post">
			-->
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
                            <!--
							<div class="col-sm-9">					
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                            </div>
							-->
							<?php 
								echo $this->Form->input('name',[
									'templates'=>[
										'inputContainer'=>'<div class="col-sm-9">{{content}}</div>'
									],
									'label'=>false,
									'class'=>'form-control',
									'id'=>'name',
									'placeholder'=>'Enter your name'
								]);
							?>							
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">email</label>
							<!--
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
                            </div>
							-->
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
                            <!--
							<div class="col-sm-9">
                                <input type="text" class="form-control" id="address1" name="address1" placeholder="Address 1">
                            </div>
							-->
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
							<!--
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="address2" name="address2" placeholder="Address 2">
                            </div>
							-->
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
                            <!--
							<div class="col-sm-9">
                                <input type="text" class="form-control" id="city" name="city" placeholder="City">
                            </div>
							-->
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
								<!--
                                <select id="province" name="province" class="form-control">
                                    <option>Ontario</option>
                                    <option>Quebec</option>
                                    <option>Manitoba</option>
                                    <option>Saskatchewan</option>
                                </select>
								-->
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
                            <!--
							<div class="col-sm-9">
                                <input type="text" class="form-control" id="postalcode" name="postalcode" placeholder="Postal Code">
                            </div>
							-->
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
                            <!--<select id="selectpizza" name="selectpizza" class="form-control">
                                <option>Sunny Side Up Pizza</option>
                                <option>BBQ Chicken Pizza</option>
                                <option>Muffuetta Pizza</option>
                                <option>Margherita Pizza</option>
                                <option>Caramelized Onion Pizza</option>
                                <option>Cheese Calzone</option>
                                <option>Grilled Pizza</option>
                                <option>Broccoli Deep Dish Pizza</option>
                                <option>Seafood Pizza</option>
                            </select>-->
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
							<!--
                            <select id="pizzasize" name="pizzasize" class="form-control">
                                <option>X-Large</option>
                                <option>Large</option>
                                <option>Medium</option>
                                <option>Small</option>
                            </select>
							-->
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
                        <!--<div class="col-sm-9">
                            <label class="radio-inline">
                                <input type="radio" name="crusttype" id="crusttype1" value="Hand-tossed" checked> Hand-tossed
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="crusttype" id="crusttype2" value="Pan"> Pan
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="crusttype" id="crusttype3" value="Stuffed"> Stuffed
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="crusttype" id="crusttype4" value="Thin"> Thin
                            </label>
                        </div>-->
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
							<!--
                            <input type="checkbox" id="inlineCheckbox1" name="toppinglist" value="Veggies"> Veggies
                            <input type="checkbox" id="inlineCheckbox2" name="toppinglist" value="Roma Tomatoes"> Roma Tomatoes
                            <input type="checkbox" id="inlineCheckbox3" name="toppinglist" value="Red Onions"> Red Onions
                            <input type="checkbox" id="inlineCheckbox4" name="toppinglist" value="Spinach"> Spinach
                            <input type="checkbox" id="inlineCheckbox5" name="toppinglist" value="Pineapple"> Pineapple
                            <input type="checkbox" id="inlineCheckbox6" name="toppinglist" value="Brocooli"> Brocooli
                            <input type="checkbox" id="inlineCheckbox7" name="toppinglist" value="Meats"> Meats
                            <input type="checkbox" id="inlineCheckbox8" name="toppinglist" value="Anchovies"> Anchovies
                            <input type="checkbox" id="inlineCheckbox9" name="toppinglist" value="Bacon Crumble"> Bacon Crumble
                            <input type="checkbox" id="inlineCheckbox10" name="toppinglist" value="Chicken"> Chicken
                            <input type="checkbox" id="inlineCheckbox11" name="toppinglist" value="Feta Cheese"> Feta Cheese
                            <input type="checkbox" id="inlineCheckbox12" name="toppinglist" value="Mozzarella"> Mozzarella
                            <input type="checkbox" id="inlineCheckbox13" name="toppinglist" value="Hot Sauce"> Hot Sauce
                            <input type="checkbox" id="inlineCheckbox14" name="toppinglist" value="BBQ Sauce"> BBQ Sauce
                            <input type="checkbox" id="inlineCheckbox15" name="toppinglist" value="Tomato Sauce"> Tomato Sauce
                            <input type="checkbox" id="inlineCheckbox16" name="toppinglist" value="Chill Sauce"> Chill Sauce
							-->					
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox1',
								'value'=>'Veggies',
								'multiple'=>'checkbox'
							]);
						?> Veggies
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox2',
								'value'=>'Roma Tomatoes',
								'multiple'=>'checkbox'						
							]);
						?> Roma Tomatoes
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox3',
								'value'=>'Red Onions',
								'multiple'=>'checkbox'						
							]);
						?> Red Onions
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox4',
								'value'=>'Spinach',
								'multiple'=>'checkbox'						
							]);
						?> Spinach
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox5',
								'value'=>'Pineapple',
								'multiple'=>'checkbox'						
							]);
						?> Pineapple
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox6',
								'value'=>'Brocooli',
								'multiple'=>'checkbox'						
							]);
						?> Brocooli
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox7',
								'value'=>'Meats',
								'multiple'=>'checkbox'						
							]);
						?> Meats
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox8',
								'value'=>'Anchovies',
								'multiple'=>'checkbox'						
							]);
						?> Anchovies
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox9',
								'value'=>'Bacon Crumble',
								'multiple'=>'checkbox'						
							]);
						?> Bacon Crumble
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox10',
								'value'=>'Chicken',
								'multiple'=>'checkbox'					
							]);
						?> Chicken
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox11',
								'value'=>'Feta Cheese',
								'multiple'=>'checkbox'						
							]);
						?> Feta Cheese
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox12',
								'value'=>'Mozzarella',
								'multiple'=>'checkbox'						
							]);
						?> Mozzarella
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox13',
								'value'=>'Hot Sauce',
								'multiple'=>'checkbox'						
							]);
						?> Hot Sauce
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox14',
								'value'=>'BBQ Sauce',
								'multiple'=>'checkbox'						
							]);
						?> BBQ Sauce
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox15',
								'value'=>'Tomato Sauce',
								'multiple'=>'checkbox'						
							]);
						?> Tomato Sauce
						<?php
							echo $this->Form->checkbox('toppinglist', [
								'hiddenField' => false,
								'id'=>'inlineCheckbox16',
								'value'=>'Chill Sauce',
								'multiple'=>'checkbox'						
							]);
						?> Chill Sauce	
						<div style="display:none;">
							<input id="chkvalue" type="hidden" name="toppinglist" value=""/>
						</div>
                        </div>
                    </div>					
                </div>

                <div class="form-group" id="controls">
                    <div class="col-sm-offset-2 col-sm-9">
                        <!--
						<input type="submit" id="button" name="submit" class="btn btn-primary" value="Order">
                        <input type="reset" id="reset" class="btn btn-info" value="Reset">
						-->						
						<?php
							echo $this->Form->button('Order', 
							[
								'type'=>'button', 
								'class'=>'btn btn-primary',
								'id'=>'order',
								'name'=>'order'							
							]);
						?>
						<?php
							echo $this->Form->button('Reset', 
							[
								'type'=>'reset', 
								'class'=>'btn btn-info',
								'id'=>'reset'
							]);
						?>	
                    </div>
                </div>
			<?= $this->Form->end() ?>
            <!--</form>-->
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