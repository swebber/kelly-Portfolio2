<div class="portfolio-content">
    <h1>Portfolio</h1>
    <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <ul id="portfolio-grid">
                <?php foreach ($portfolioList as $item) { ?>
                <li>
                    <div class="portfolio-item">
                        <a href="/portfolio/<?php echo $item->href; ?>">
                            <img src="<?php echo $item->img; ?>" alt="<?php echo $item->name; ?>" />
                        </a>
                        <div class="overlay-content"><?php echo $item->name; ?></div>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs portfolio-list">
            <?php foreach ($portfolioList as $item) { ?>
                <p><a href="/portfolio/<?php echo $item->href; ?>" alt="<?php echo $item->name; ?>"><?php echo $item->name; ?></a></p>
            <?php } ?>
        </div>
    </div>
</div>