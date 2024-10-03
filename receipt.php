<?php
if (isset($_POST["submitBtn"])) {
    $product = $_POST['product'];
    $quantity = (int)$_POST['quantity'];
    $cash = (int)$_POST['cash'];

    // Prices for the products
    $prices = [
        "Burger" => 50,
        "Fries" => 70,
        "Steak" => 150
    ];

    // Calculate total cost
    $totalCost = $prices[$product] * $quantity;

    // Check if the customer has enough cash
    if ($cash >= $totalCost) {
        $change = $cash - $totalCost;
        
        
        // Display receipt
        echo '<div style="text-align: center; border: 2px dotted black; padding: 10px; margin: 10px;">';
        echo "<h2 style='margin: 0;'>Receipt</h2>";
        echo "<p>Total Price: PHP {$totalCost}</p>";
        echo "<p>You Paid: PHP {$cash}</p>";
        echo "<p>Change: PHP {$change}</p>";
        echo date('m/d/Y H:i:s a'); 
        echo '</div>';
    } else {
        // display an error if not enough cash
        echo '<div style="text-align: center; border: 2px dotted red; padding: 10px; margin: 10px;">';
        echo "<h1>Sorry, balance not enough.</h1>";
        echo '</div>'; 
    }
}
?>
