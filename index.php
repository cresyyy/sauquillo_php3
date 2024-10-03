<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System</title>
</head>
<body>

    <h1 style="text-align: center;">Menu</h1>
    <div class="center-content" style="text-align: center; margin: 0 40vw 0 40vw; background-color: blue; padding: 20px;">
    <table style="border: solid black 1px; margin: auto; background-color: #fff;">
        <tr style="background-color: #fff;">
            <th style='padding:10px; background-color:#051039; color:#fff;'>Order</th>
            <th style='padding:10px; background-color:#051039; color:#fff;'>Amount</th>
        </tr>
        <tr>
            <th style="border: solid black 1px;">Burger</th>
            <th style="border: solid black 1px;">50</th>
        </tr>
        <tr>
            <th style="border: solid black 1px;">Fries</th>
            <th style="border: solid black 1px;">75</th>
        </tr>
        <tr>
            <th style="border: solid black 1px;">Steak</th>
            <th style="border: solid black 1px;">150</th>
        </tr>
    </table>
    <br>
    <!-- Order Form -->
    <form action="receipt.php" method="POST" style="display: inline-block; text-align: left; background-color: #fff; border: solid 2px #F62411; padding: 15px; border-radius: 5px;">
        <label for="product">Select Product:</label>
        <select name="product" id="product">
            <option value="Burger">Burger</option>
            <option value="Fries">Fries</option>
            <option value="Steak">Steak</option>
        </select>

        <br><br>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1" value="1" required>

        <br><br>

        <label for="cash">Cash (PHP):</label>
        <input type="number" name="cash" id="cash" min="1" required>

        <br><br>

        <input type="submit" name="submitBtn" value="Submit">
    </form>
</div>




</body>
</html>

