<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Rental Books</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/vegas.min.css" />
</head>
<body id="vegas">
  <div class="order-wrapper">
    <h2>注文内容確認</h2>
    
    <?php $totalPayment = 0 ; ?>
    
    <?php foreach ($menus as $menu): ?>
      <?php $orderCount = $_POST[$menu->getName()];
      $menu->setOrderCount($orderCount);
      $totalPayment+=$menu->getTotalPrice();
      ?>
      <p class="order-amount">
        <?php echo $menu->getName() ?>
        x
        <?php echo $orderCount ?>
        日
      </p>
      
      <p class="order-price"><?php echo $menu->getTotalPrice() ?>円</p>
    <?php endforeach ?>
    
    <h3>合計金額:<?php echo $totalPayment ?>円</h3>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        
        <script script type="text/javascript" src="js/vegas.min.js"></script>
        <script script type="text/javascript" src="js/function.js"></script> 
</body>
</html>