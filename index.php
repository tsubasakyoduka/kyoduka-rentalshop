<?php require_once('data.php') ;
      require_once('menu.php') ;
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
        <div class="menu-wrapper container">
            <h1 class="logo">Rental Books</h1>
            <h3>貸し出し可：<?php echo Menu::getCount() ?>冊</h3>
          <form method="post" action="confirm.php">
            <div class="menu-items">
                <?php foreach($menus as $menu): ?>
                <div class="menu-item">
                    <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
                  <h3 class="menu-item-name">
                      <a href="show.php?name=<?php echo $menu->getName() ?>">
                          <?php echo $menu->getName() ?>
                          </a>
                          
                  </h3>
                  
                  <?php if ($menu instanceof Author): ?>
                  
                  <p class="menu-item-type">著者：<?php echo $menu->getType() ?></p>
                  <?php for($i=0; $i<$menu->getRecommended(); $i++) : ?>
                  <img class="icon-recommended" src="img/r00024_fw.png">
                  <?php endfor ?>
                  <?php endif ?>
                   <p class="price">1日：¥<?php echo $menu->getTaxIncludedPrice() ?>（税込）</p>
                   <input type="text" value="0" name="<?php echo $menu->getName() ?>"><span>日</span>
                 </div>
                <?php endforeach ?>
            </div>
            
            <input value='レンタルする' type='submit'>
        </form>
            
        </div>
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        
        <script script type="text/javascript" src="js/vegas.min.js"></script>
        <script script type="text/javascript" src="js/function.js"></script> 
    </body>
</html>