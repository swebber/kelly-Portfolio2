<?php
class PortfolioController {

    public function __construct() {}

    public function index() {
        $portfolioList = Portfolio::all();
        require_once('/views/portfolio/index.php');
    }

    public function tickets() {
        require_once('/views/portfolio/tickets.php');
    }

    public function alphabet() {
        require_once('/views/portfolio/alphabet.php');
    }

    public function archi_type() {
        require_once('/views/portfolio/archi-type.php');
    }

    public function east_cuisine() {
        require_once('/views/portfolio/east-cuisine.php');
    }

    public function meat() {
        require_once('/views/portfolio/meat.php');
    }

    public function mica_blog() {
        require_once('/views/portfolio/mica-blog.php');
    }

    public function belgrade() {
        require_once('/views/portfolio/belgrade.php');
    }

    public function comparing_type() {
        require_once('/views/portfolio/comparing-type.php');
    }

    public function photography() {
        require_once('/views/portfolio/photography.php');
    }

    public function printmaking() {
        require_once('/views/portfolio/printmaking.php');
    }

    public function ashley_pa() {
        require_once('/views/portfolio/ashley-pa.php');
    }
    
}
?>
