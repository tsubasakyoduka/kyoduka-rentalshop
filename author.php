<?php require_once('menu.php');

class Author extends Menu {
    private $type;
    private $recommended;
    
    public function __construct($name, $price, $image, $type, $recommended){
        parent::__construct($name, $price, $image);
        $this->type = $type;
        $this->recommended = $recommended;
    }
    
    
    public function getType(){
        return $this->type ;
    }
    
    public function getRecommended(){
        return $this->recommended ;
    }
    
    public function setType($type){
        $this->type = $type ;
    }
}
?>