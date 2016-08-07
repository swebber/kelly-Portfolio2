<?php
class Portfolio {
    
    public $name;
    public $href;
    public $img;
    
    public function __construct($name, $href, $img) {
        $this->name = $name;
        $this->href = $href;
        $this->img = $img;
    }
    
    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM portfolioitems WHERE IsEnabled = 1 ORDER BY Sequence');
        
        foreach ($req->fetchAll() as $portolioItem) {
            $list[] = new Portfolio( $portolioItem['Title'], $portolioItem['PageName'], $portolioItem['PrimaryImage'] );
        }

        return $list;
    }
}
?>