<!DOCTYPE html>
<html>

<head>
    <title>Assignment 1 - Conestoga Pizzeria</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script type="text/JavaScript" src="js/script.js"></script>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>

<body>
    <div id="container">
        <div class="darkRedLine"></div>
        <div class="top-title">
            Order Succeed!
        </div>
        <img alt="logo" src="images/pizza02.jpg" />
        <div class="under-line"></div>
        <div class="body-home">
            <h2>Thank you for Order!</h2>
            <?php				
					$name = $_POST['name'];
					$email = $_POST['email'];
					$address1 = $_POST['address1'];
					$address2 = $_POST['address2'];
					$city = $_POST['city'];
					$province = $_POST['province'];
					$postalCode = $_POST['postalcode'];
					$phoneNumber = $_POST['phonenumber'];
					$selectedPizza = $_POST['selectpizza'];
					$pizzaSize = $_POST['pizzasize'];
					$crustType = $_POST['inlineRadioOptions'];
					$crustCost = 2;
					$checked_count = 0;
					$toppingCost = 0;
					$subTotal = 0;
					$totalPrice = 0;
					$taxRate = 0;
					$tempString = "";
					$fileName = "submittedOrderContents.txt";

					$myfile = fopen($fileName, "w") or die("Unable to open file!");

					$tempString = "Customer Information : ";
					fwrite($myfile, $tempString . "\r\n");
					echo "<h3 class='h3-title'>" . $tempString . "</h3>";
					echo ("<p class='order-summary'>");   

					$tempString = "Name : " . $name;
					fwrite($myfile, $tempString . "\r\n");
					echo $tempString;

					$tempString = "eMail : " . $email;
					fwrite($myfile, $tempString . "\r\n");
					echo ("<br>") . $tempString;

					$tempString = "Address 1 : " . $address1;
					fwrite($myfile, $tempString . "\r\n");
					echo ("<br>") . $tempString;

					$tempString = "Address 2 : " . $address2;
					fwrite($myfile, $tempString . "\r\n");
					echo ("<br>") . $tempString;

					$tempString = "City : " . $city;
					fwrite($myfile, $tempString . "\r\n");
					echo ("<br>") . $tempString;

					$tempString = "Province : " . $province;
					fwrite($myfile, $tempString . "\r\n");
					echo ("<br>") . $tempString;

					$tempString = "Postal Code : " . $postalCode;
					fwrite($myfile, $tempString . "\r\n");
					echo ("<br>") . $tempString;

					$tempString = "Phone Number : " . $phoneNumber;
					fwrite($myfile, $tempString . "\r\n");
					echo ("<br>") . $tempString;
					echo ("</p>");

					$tempString = "Order Information : ";
					fwrite($myfile, $tempString . "\r\n");
					echo "<h3 class='h3-title'>" . $tempString . "</h3>";  

					$tempString = "Selected Pizza : " . $selectedPizza;
					fwrite($myfile, $tempString . "\r\n");
					echo ("<p class='order-summary'>") . $tempString;

					$tempString = "Pizza Size : " . $pizzaSize;
					fwrite($myfile, $tempString . "\r\n");
					echo ("<br>") . $tempString;

					$tempString = "Crust Type : " . $crustType;
					fwrite($myfile, $tempString . "\r\n");
					echo ("<br>") . $tempString;

					$tempString = "Toppings : ";
					fwrite($myfile, $tempString);
					echo ("<br>") . $tempString;

					if(!empty($_POST['toppinglist'])) {

						$checked_count = count($_POST['toppinglist']);

						$tempString = $checked_count . " Topping(s) selected";
						fwrite($myfile, $tempString . "\r\n");            
						echo  $tempString . "<br>";
						$tempString = "";                        
                        
						$i = 1;
						// Loop to store and display values of individual checked checkbox.
						foreach($_POST['toppinglist'] as $selected) {

							if($checked_count == $i)
							{
								echo $selected;
								$tempString = $tempString . $selected;
							}else{
								echo $selected .", ";      
								$tempString = $tempString . $selected . ", ";
							}
								$i++;
						}
						fwrite($myfile, $tempString . "\r\n");                        

					}else{
						$tempString = "No topping selected";
						fwrite($myfile, $tempString . "\r\n");
						echo $tempString;        
					}

					$sizePrice = 0;

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

					$tempString = "Order Price : ";
					fwrite($myfile, $tempString . "\r\n");				
					echo "<h3 class='h3-title'>" . $tempString . "</h3>";
					$tempString = "Pizza Size Price : $ " . $sizePrice;
					fwrite($myfile, $tempString . "\r\n");
					echo "<p class='order-summary'>" . $tempString;

					if($crustType == "Stuffed"){

						$tempString = "Crust cost : $ " . $crustCost;
						fwrite($myfile, $tempString . "\r\n");
						echo "<br>" . $tempString;

						$subTotal += $crustCost;
					}

					if($checked_count > 1){
						$toppingCost = 0.5 * ($checked_count-1);

						$tempString = "Topping cost : $ " . $toppingCost;
						fwrite($myfile, $tempString . "\r\n");
						echo "<br>" . $tempString;

						$subTotal += $toppingCost;
					}

					$tempString = "Sub total : $ " . $subTotal;
					fwrite($myfile, $tempString . "\r\n");
					echo "<br>" . $tempString;

					$tempString = "Tax Rate(" . $province . ") : " . $taxRate * 100 . "%";
					fwrite($myfile, $tempString . "\r\n");
					echo "<br>" . $tempString;

					$tempString = "Tax : $ " . $subTotal * $taxRate;
					fwrite($myfile, $tempString . "\r\n");
					echo "<br>" . $tempString . "</p>";

					$totalPrice = $subTotal * (1 + $taxRate);

					$tempString = "Total Price : $ " . round($totalPrice, 2);
					fwrite($myfile, $tempString . "\r\n");
					echo "<h3 class='h3-total'>" . $tempString . "</h3><br>";

					fclose($myfile);
                ?>
        </div>
        <div class="BottomLine"></div>
        <div class="bottom-title">
            <div class="col-sm-9 bottom-left">Conestoga Pizzeria &copy; 2015 / Web Technologies</div>
            <div class="col-sm-3">
                <ul id="menulist">
                    <li class="menuitem">
                        <a href="http://www.conestogac.on.ca/"><img src="images/facebook.png" alt="Facebook"></a>
                    </li>
                    <li class="menuitem">
                        <a href="http://www.conestogac.on.ca/"><img src="images/twitter.png" alt="Twitter"></a>
                    </li>
                    <li class="menuitem">
                        <a href="http://www.conestogac.on.ca/"><img src="images/youtube.png" alt="You Tube"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>