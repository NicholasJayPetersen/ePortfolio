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

    <div class="image-wrapper">
        <p><img class="noshow, scale-image" src="header.jpg" alt="Photo of inside of CIS 122 restaurant"></p>
    </div>

    <?php

    $subtotal =mb_substr($_POST['subtotal'],0,7);
    $taxes =mb_substr($_POST['taxes'],0,7);
    $total =mb_substr($_POST['total'],0,7);
    $couponcode =mb_substr($_POST['couponcode'],0,7);
    $discount =mb_substr($_POST['discount'],0,15);

    $firstname =mb_substr($_POST['firstname'],0,30);
    $lastname =mb_substr($_POST['lastname'],0,30);
    $phone1 =mb_substr($_POST['phone1'],0,3);
    $phone2 =mb_substr($_POST['phone2'],0,3);
    $phone3 =mb_substr($_POST['phone3'],0,4);
    $email =mb_substr($_POST['email'],0,35);
    $CardType =mb_substr($_POST['CardType'],0,10);
    $CardNumber =mb_substr($_POST['CardNumber'],0,16);
    $zipcode =mb_substr($_POST['zipcode'],0,5);
    $date = date('Y-m-d H:i:s');

    include('../connect.php');
    try{
        $DBH = new PDO("mysql:host=$host;dbname=$database;", $username, $password);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

    $sql =$DBH->prepare("INSERT INTO payment VALUES (NULL, :firstname, :lastname, :phone1, :phone2, :phone3, :email, :CardType, :CardNumber, :zipcode, :subtotal, :taxes, :discount, :total, :couponcode, :date)"); 

    $sql->execute( array(':firstname'=>$firstname, ':lastname'=>$lastname, ':phone1'=>$phone1, ':phone2'=>$phone2, ':phone3'=>$phone3, ':email'=>$email, ':CardType'=>$CardType, ':CardNumber'=>$CardNumber, ':zipcode'=>$zipcode, ':subtotal'=>$subtotal, ':taxes'=>$taxes, ':discount'=>$discount, ':total'=>$total, ':couponcode'=>$couponcode, ':date'=>$date ) )or die(print_r($sql->errorInfo(), true)); 

    $query=$DBH->prepare("SELECT * FROM payment WHERE firstname = :firstname AND lastname = :lastname AND orderdate = :date");
    $values = [':firstname' => $firstname, ':lastname' => $lastname, ':date' => $date]; 
    $query->execute($values);
    $payments = $query->fetchAll(PDO::FETCH_CLASS, 'StdClass');

    foreach($payments as $payment) {
        $payment_id = $payment->payment_id;
    }

    if(!empty($_POST['wings'])){
        $wings=$_POST['wings'];
        $sql=$DBH->prepare("INSERT INTO orders VALUES(NULL, :payment_id, 'Boneless Wings and Skins Sampler', :wings)");
        $sql->execute(array(':payment_id'=>$payment_id, ':wings'=>$wings))or die(print_r($sql->errorInfo(), true));
    }

    if(!empty($_POST['nachos'])){
        $nachos=$_POST['nachos'];
        $sql=$DBH->prepare("INSERT INTO orders VALUES(NULL, :payment_id, 'Three Cheese Nachos', :nachos)");
        $sql->execute(array(':payment_id'=>$payment_id, ':nachos'=>$nachos))or die(print_r($sql->errorInfo(), true));
    }

    if(!empty($_POST['dip'])){
        $dip=$_POST['dip'];
        $sql=$DBH->prepare("INSERT INTO orders VALUES(NULL, :payment_id, 'Spinach Artichoke Dip', :dip)");
        $sql->execute(array(':payment_id'=>$payment_id, ':dip'=>$dip))or die(print_r($sql->errorInfo(), true));
    }

    if(!empty($_POST['quesadilla'])){
        $quesadilla=$_POST['quesadilla'];
        $sql=$DBH->prepare("INSERT INTO orders VALUES(NULL, :payment_id, 'Santa Fe Chicken Quesadilla', :quesadilla)");
        $sql->execute(array(':payment_id'=>$payment_id, ':quesadilla'=>$quesadilla))or die(print_r($sql->errorInfo(), true));
    }

    if(!empty($_POST['chips'])){
        $chips=$_POST['chips'];
        $sql=$DBH->prepare("INSERT INTO orders VALUES(NULL, :payment_id, 'Chips and Salsa', :chips)");
        $sql->execute(array(':payment_id'=>$payment_id, ':chips'=>$chips))or die(print_r($sql->errorInfo(), true));
    }

    if(!empty($_POST['calamari'])){
        $calamari=$_POST['calamari'];
        $sql=$DBH->prepare("INSERT INTO orders VALUES(NULL, :payment_id, 'Fried Calamari', :calamari)");
        $sql->execute(array(':payment_id'=>$payment_id, ':calamari'=>$calamari))or die(print_r($sql->errorInfo(), true));
    }

    if(!empty($_POST['pastrami'])){
        $pastrami=$_POST['pastrami'];
        $sql=$DBH->prepare("INSERT INTO orders VALUES(NULL, :payment_id, 'Pastrami Sandwich', :pastrami)");
        $sql->execute(array(':payment_id'=>$payment_id, ':pastrami'=>$pastrami))or die(print_r($sql->errorInfo(), true));
    }

    if(!empty($_POST['panini'])){
        $panini=$_POST['panini'];
        $sql=$DBH->prepare("INSERT INTO orders VALUES(NULL, :payment_id, 'Roasted Turkey & Acocado BLT Panini', :panini)");
        $sql->execute(array(':payment_id'=>$payment_id, ':panini'=>$panini))or die(print_r($sql->errorInfo(), true));
    }

    if(!empty($_POST['reuben'])){
        $reuben=$_POST['reuben'];
        $sql=$DBH->prepare("INSERT INTO orders VALUES(NULL, :payment_id, 'Reuben Sandwich', :reuben)");
        $sql->execute(array(':payment_id'=>$payment_id, ':reuben'=>$reuben))or die(print_r($sql->errorInfo(), true));
    }

    if(!empty($_POST['vegetarian'])){
        $vegetarian=$_POST['vegetarian'];
        $sql=$DBH->prepare("INSERT INTO orders VALUES(NULL, :payment_id, 'Vegetarian Sandwich', :vegetarian)");
        $sql->execute(array(':payment_id'=>$payment_id, ':vegetarian'=>$vegetarian))or die(print_r($sql->errorInfo(), true));
    }

    if(!empty($_POST['turkey'])){
        $turkey=$_POST['turkey'];
        $sql=$DBH->prepare("INSERT INTO orders VALUES(NULL, :payment_id, 'Chipotle Honey Mustard Turkey Wrap', :turkey)");
        $sql->execute(array(':payment_id'=>$payment_id, ':turkey'=>$turkey))or die(print_r($sql->errorInfo(), true));
    }

    if(!empty($_POST['burger'])){
        $burger=$_POST['burger'];
        $sql=$DBH->prepare("INSERT INTO orders VALUES(NULL, :payment_id, 'BBQ Bacon Cheddar Burger', :burger)");
        $sql->execute(array(':payment_id'=>$payment_id, ':burger'=>$burger))or die(print_r($sql->errorInfo(), true));
    }

    if(!empty($_POST['jambalaya'])){
        $jambalaya=$_POST['jambalaya'];
        $sql=$DBH->prepare("INSERT INTO orders VALUES(NULL, :payment_id, 'Cajun Jambalaya Pasta', :jambalaya)");
        $sql->execute(array(':payment_id'=>$payment_id, ':jambalaya'=>$jambalaya))or die(print_r($sql->errorInfo(), true));
    }

    if(!empty($_POST['shrimp'])){
        $shrimp=$_POST['shrimp'];
        $sql=$DBH->prepare("INSERT INTO orders VALUES(NULL, :payment_id, 'Parmesan Shrimp Pasta', :shrimp)");
        $sql->execute(array(':payment_id'=>$payment_id, ':shrimp'=>$shrimp))or die(print_r($sql->errorInfo(), true));
    }

    if(!empty($_POST['chickenpasta'])){
        $chickenpasta=$_POST['chickenpasta'];
        $sql=$DBH->prepare("INSERT INTO orders VALUES(NULL, :payment_id, 'Parmesan Chicken Pasta', :chickenpasta)");
        $sql->execute(array(':payment_id'=>$payment_id, ':chickenpasta'=>$chickenpasta))or die(print_r($sql->errorInfo(), true));
    }

    if(!empty($_POST['angelhair'])){
        $angelhair=$_POST['angelhair'];
        $sql=$DBH->prepare("INSERT INTO orders VALUES(NULL, :payment_id, 'Angel Hair Pasta', :angelhair)");
        $sql->execute(array(':payment_id'=>$payment_id, ':angelhair'=>$angelhair))or die(print_r($sql->errorInfo(), true));
    }

    if(!empty($_POST['alfredo'])){
        $alfredo=$_POST['alfredo'];
        $sql=$DBH->prepare("INSERT INTO orders VALUES(NULL, :payment_id, 'Chicken and Mushroom Alfredo', :alfredo)");
        $sql->execute(array(':payment_id'=>$payment_id, ':alfredo'=>$alfredo))or die(print_r($sql->errorInfo(), true));
    }

    if(!empty($_POST['apple'])){
        $apple=$_POST['apple'];
        $sql=$DBH->prepare("INSERT INTO orders VALUES(NULL, :payment_id, 'Baked Apple Dumpling', :apple)");
        $sql->execute(array(':payment_id'=>$payment_id, ':apple'=>$apple))or die(print_r($sql->errorInfo(), true));
    }

    if(!empty($_POST['brownie'])){
        $brownie=$_POST['brownie'];
        $sql=$DBH->prepare("INSERT INTO orders VALUES(NULL, :payment_id, 'Chcolate Fudge Brownie', :brownie)");
        $sql->execute(array(':payment_id'=>$payment_id, ':brownie'=>$brownie))or die(print_r($sql->errorInfo(), true));
    }

    echo "<p>Order successfully placed.</p>";

    $DBH=null;

    ?>


</div>

</body>
</html>