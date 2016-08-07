<div class="c-wrapper">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php
            $itemCount = count($carouselList);
            for ($i = 0; $i < $itemCount; $i++) {
                ?>
                <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i == 0) ? 'active' : ''; ?>"></li>
                <?php
            }
            ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php 
            $firstPass = true;
            foreach ($carouselList as $item) { ?>
            <div class="<?php echo $firstPass ? 'item active' : 'item' ?>">
                <img src="<?php echo $item->img; ?>" alt="<?php echo $item->alt; ?>">
            </div>
            <?php 
                $firstPass = false;
            }
            ?>
        </div>

        <!-- Left and right controls -->
        <!--    
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        -->

    </div>
</div>