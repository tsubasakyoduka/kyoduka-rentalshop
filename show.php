<?php
require_once('menu.php');
require_once('data.php');


$menuName = $_GET['name'];
$menu = Menu::findByName($menus, $menuName);
$menuReviews = $menu->getReviews($reviews);

?>

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
  <div class="review-wrapper">
    <div class="review-menu-item">
      <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
      <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
  
      <?php if ($menu instanceof Author): ?>
        <p class="menu-item-type">著者：<?php echo $menu->getType() ?></p>
      <?php else: ?>
        <?php for ($i = 0; $i < $menu->getRecommended(); $i++): ?>
          <img class="icon-recommended" src="img/r00024_fw.png">
        <?php endfor ?>
      <?php endif ?>
      <p class="price">¥<?php echo $menu->getTaxIncludedPrice() ?></p>
    </div>
    
    <div class="review-list-wrapper">
      <div class="review-list">
        <div class="review-list-title">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/review.png" class='icon-review'>
          <h4>レビュー一覧</h4>
        </div>
        <?php foreach($menuReviews as $review): ?>
        <?php $user = $review->getUser($users) ?>
        <div class="review-list-item">
          <div class="review-user">
            <?php if($user->getGender() == 'male'):?>
              <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/male.png" class='icon-user'>
              <?php else :?>
              <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/female.png" class='icon-user'>
              <?php endif?>
              
              <p><?php echo $user->getId() ?></p>
              <p><?php echo $user->getName() ?></p>
              
              
            </div>
              
            <p class="review-text"><?php echo $review->getBody() ?></p>
          </div>
        
        <?php endforeach ?>
        
      </div>
    </div>
    <a href="index.php">← 貸し出し一覧へ</a>
  </div>
  
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        
        <script script type="text/javascript" src="js/vegas.min.js"></script>
        <script script type="text/javascript" src="js/function.js"></script> 
</body>
</html>