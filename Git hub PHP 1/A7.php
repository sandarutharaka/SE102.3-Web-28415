<html>
    <head>Electricity bill</head>
    <body>
        <?php
        $Rate1 = 3.50;
        $Rate2 = 4.00;
        $Rate3 = 5.20;
        $Rate4 = 6.50;
        
        $units = 120; 
        
        if ($units <= 50) {
            $bill = $units * $Rate1;
        } elseif ($units <= 100) {
            $bill = 50 * $Rate1 + ($units - 50) * $Rate2;
        } elseif ($units <= 150) {
            $bill = 50 * $Rate1 + 50 * $Rate2 + ($units - 100) * $Rate3;
        } else {
            $bill = 50 * $Rate1 + 50 * $Rate2 + 50 * $Rate3 + ($units - 150) * $Rate4;
        }
        
        echo "Rate1: " . $Rate1 . "<br>";
        echo "Rate2: " . $Rate2 . "<br>";
        echo "Rate3: " . $Rate3 . "<br>";
        echo "Rate4: " . $Rate4 . "<br>";
        
        echo "Electricity Bill: Rs. " . number_format($bill, 2);
        ?>
    </body>
</html>
