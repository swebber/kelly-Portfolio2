<?php
class Home {

    public $id;
    public $img;
    public $alt;
    
    function __construct($id, $img, $alt) {
        $this->id = $id;
        $this->img = $img;
        $this->alt = $alt;
    }
    
    public static function all() {
        
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM circleimages WHERE IsEnabled = 1 ORDER BY Sequence');
        
        foreach ($req->fetchAll() as $item) {
            $list[] = new Home($item['CircleImageId'], $item['FileName'], $item['AltText']);
        }
        
        return $list;
    }

}
?>