<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="keywords" content="CIS Restaurant, Lunch Menu"> 
        <meta name="description" content="CIS Restaurant: Lunch Menu"> 
        <title>CIS Restaurant Menu</title> 
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    
    <body> 
        <div id="container"> 
            <h2 class="blue center">CIS 122 Restaurant - Menu Orders</h2> 
            <?php 

            $payment_id = mb_substr($_GET['payment_id'],0,3);

            // database login credentials 
            include('../connect.php');  

            // Establish database connection with PDO 
            try { 
                $DBH = new PDO("mysql:host=$host;dbname=$database", $username, $password); 
            } 
            catch(PDOException $e) { 
                echo $e->getMessage(); 
            } 

            // Run Query 
            $stmt = $DBH->prepare("SELECT * FROM orders WHERE payment_id = :payment_id"); 
            $stmt->execute([':payment_id' => $payment_id]); 
            $result = $stmt->fetchAll(); 
            echo "<table class=\"table2 tablectr\">"; 
            echo "<tr><th>Order No</th><th>Menu Items/Time</th><th>Quantity</th></tr>"; 
            foreach($result as $row) { 
                echo '<tr">'; 
                echo "<td>". htmlspecialchars($row['order_id']) . "</td>"; 
                echo "<td>" . htmlspecialchars($row['menuitem']) . "</td>"; 
                echo "<td>" . htmlspecialchars($row['quantity']) ."</td>"; 
                echo "</tr>";
             }   
                echo "</table>"; 
                
                // Close database connection 
                $DBH = null; 
                ?> 
                <br> 
            </div> 
            <br> 
        </body> 
        </html> 