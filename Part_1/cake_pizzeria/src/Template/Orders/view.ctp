    <div id="container" class="bodyblock">
        <div class="darkRedLine"></div>
        <div class="result-title">
            Order View : # <?= h($order->id) ?> ( Status : <?= h($order->status) ?> )
        </div>
        <div class="under-line"></div>
        <div class="body-home">
		
			<ul class="horizontal">
				<li><?= $this->Html->link('Log Out', ['controller' => 'Users', 'action' => 'logout']) ?></li>			
				<li><?= $this->Html->link('Order List', ['controller' => 'Orders', 'action' => 'index']) ?></li>
			</ul>
			
            <h2>Detail View of Order</h2>
            <h3 class='h3-title'>Customer Information</h3>
			<ul>
				<li>Name : <?= h($order->name) ?></li>
				<li>eMail : <?= h($order->email) ?></li>
				<li>Address 1 : <?= h($order->address1) ?></li>
				<li>Address 2 : <?= h($order->address2) ?></li>
				<li>City : <?= h($order->city) ?></li>
				<li>Province : <?= h($order->province) ?></li>
				<li>Postal Code : <?= h($order->postalcode) ?></li>
				<li>Phone Number : <?= h($order->phonenumber) ?></li>
			</ul>
            <h3 class='h3-title'>Order Information</h3>
            <ul>
				<li>Order Number : <?= h($order->id) ?></li>
                <li>Selected Pizza : <?= h($order->selectpizza) ?></li>
				<li>Pizza Size : <?= h($order->pizzasize) ?></li>
                <li>Crust Type : <?= h($order->crusttype) ?></li>
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
                <li>Toppings : <?= $temp_string ?> Topping(s) selected</li>
                <?php if($toppings != "") echo "<li>" . implode(", ", $ary_topping) . "</li>" ?>
				<li>Ordered : <?= h($order->created) ?></li>
				<li>Modified : <?= h($order->modified) ?></li>
			</ul>
            <h3 class='h3-title'>Order Price</h3>				
            <ul>
				<li>Pizza Size Price : $ <?= $sizePrice ?></li>
				<li>Crust cost : $ <?= $crustCost ?></li>
				<li>Topping cost : $ <?= $toppingCost ?></li>
				<li>Sub total : $ <?= $subTotal ?></li>
				<li>Tax Rate(<?= $province ?>) : <?= $taxRate * 100 ?>%</li>
				<li>Tax : $ <?= $subTotal * $taxRate ?></li>
			</ul>
            <h3 class='h3-total'>Total Price : $ <?=round($totalPrice, 2) ?></h3>
		</div>

    </div>