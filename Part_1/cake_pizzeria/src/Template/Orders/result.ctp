    <div id="container">
        <div class="darkRedLine"></div>
        <div class="top-title">
            Order Succeed!
        </div>
        <img alt="logo" src="/img/pizza02.jpg" />
        <div class="under-line"></div>
        <div class="body-home">
            <h2>Thank you for Order!</h2>
            <h3 class='h3-title'>Customer Information</h3>
            <p class='order-summary'>Name : <?= h($order->name) ?>
                <br>eMail : <?= h($order->email) ?>
                <br>Address 1 : <?= h($order->address1) ?>
                <br>Address 2 : <?= h($order->address2) ?>
                <br>City : <?= h($order->city) ?>
                <br>Province : <?= h($order->province) ?>
                <br>Postal Code : <?= h($order->postalcode) ?>
                <br>Phone Number : <?= h($order->phonenumber) ?></p>
            <h3 class='h3-title'>Order Information</h3>
            <p class='order-summary'>Order Number : <?= h($order->id) ?>
                <br>Selected Pizza : <?= h($order->selectpizza) ?>
				<br>Pizza Size : <?= h($order->pizzasize) ?>
                <br>Crust Type : <?= h($order->crusttype) ?>
				<?php
					$toppings = h($order->toppinglist);

					$ary_topping = explode(",", $toppings);
					$count_topping = 0;
					if($toppings != ""){
						$count_topping = substr_count($toppings, ",");	
						if($count_topping == 0)
							$count_topping = 1;
						else
							$count_topping++;
					}					
					
					$temp_string;
					
					if($count_topping > 0){
						$temp_string = $count_topping;
					}else{
						$temp_string = 'No';
					}
						
					$sizePrice = 0;
					$province = h($order->province);					
					$crustType = h($order->crusttype);
					$pizzaSize = h($order->pizzasize);					
					$crustCost = 0;
					$subTotal = 0;
					$totalPrice = 0;
					$taxRate = 0;
					$toppingCost = 0;					

					switch($province){
						case "Ontario":
							$taxRate = 0.13;
							break;
						case "Quebec":
							$taxRate = 0.14975;
							break;
						case "Manitoba":
							$taxRate = 0.13;
							break;
						case "Saskatchewan":
							$taxRate = 0.1;
							break;           
					}

					switch($pizzaSize){
						case "X-Large":
							$sizePrice = 20;
							break;
						case "Large":
							$sizePrice = 15;
							break;
						case "Medium":
							$sizePrice = 10;
							break;
						case "Small":
							$sizePrice = 5;
							break;           
					}				

					$subTotal += $sizePrice;
					
					if($count_topping > 1){
						$toppingCost = 0.5 * ($count_topping - 1);
						$subTotal += $toppingCost;						
					}
					
					if($crustType == "Stuffed"){
						$crustCost = 2;
						$subTotal += $crustCost;
					}

					$totalPrice = $subTotal * (1 + $taxRate);					
				?>
                <br>Toppings : <?= $temp_string ?> Topping(s) selected
                <br><?= implode(", ", $ary_topping) ?>
                <h3 class='h3-title'>Order Price</h3>				
                <p class='order-summary'>Pizza Size Price : $ <?= $sizePrice ?>
					<br>Crust cost : $ <?= $crustCost ?>
                    <br>Topping cost : $ <?= $toppingCost ?>
                    <br>Sub total : $ <?= $subTotal ?>
                    <br>Tax Rate(<?= $province ?>) : <?= $taxRate * 100 ?>%
                    <br>Tax : $ <?= $subTotal * $taxRate ?></p>
                <h3 class='h3-total'>Total Price : $ <?=round($totalPrice, 2) ?></h3>
                <br> </div>
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