<?php
require_once('author.php');
require_once('review.php');

require_once('user.php');

$book1 = new Author('ブチ抜く力',100,'img/yozawa.jpg','与沢翼',5);
$book2 = new Author('心理戦略',100,'img/DaiGo.jpg','DaiGo',5);
$book3 = new Author('死ぬこと以外かすり傷',100,'img/minowa.jpg','箕輪厚輪',5);
$book4 = new Author('多動力',100, 'img/Horie.jpg','堀江貴文',5);


$menus = array($book1, $book2 ,$book3, $book4);


$user1 = new User('sasaki','male');


$user2 = new User('ukai','female');


$users = array($user1, $user2);




$review1 = new Review($book1->getName(), $user1->getName(), 'モチベーションが上がった！');
$review2 = new Review($book2->getName(), $user1->getName(), '仕事で使える！');
$review3 = new Review($book3->getName(), $user1->getName(), '香りがいいです');
$review4 = new Review($book4->getName(), $user1->getName(), 'ソースが絶品です。また食べたい。');
$review5 = new Review($book1->getName(), $user2->getName(), '実体験が書かれていて面白い！');
$review6 = new Review($book2->getName(), $user2->getName(), 'すごく腑に落ちた！');
$review7 = new Review($book3->getName(), $user2->getName(), '苦味がちょうどよくて、おすすめです');
$review8 = new Review($book4->getName(), $user2->getName(), '具材にこだわりを感じました。');


$reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8);

?>