<?php function printInColumns($pages, $printer) { ?>
    <?php 
        $myPages = array_chunk($pages, round(sizeof($pages) / 2));
    ?>
    <div class="row">
        <div class="col">
            <?php 
                foreach ($myPages[0] as $page) {
                    $printer(new Page($page));
                }
            ?>
        </div>
        <div class="col">
            <?php 
                if (sizeof($myPages) > 1) {
                    foreach ($myPages[1] as $page) {
                        $printer(new Page($page));
                    }    
                }
            ?>
        </div>
    </div>
<?php } ?>

<?php function getPagesForCategory($categoryKey) { 
    return getCategory($categoryKey)->pages(); 
} ?>

<?php function printMenu($pages) {
    foreach ($pages as $page) {
        printMenuItem(new Page($page));
    }
} ?>

<?php function printMenuItem($page) { ?>
    <a href="<?php echo $page->permalink(); ?>" class="btn btn-primary"><?php echo $page->title(); ?></a>
<?php } ?>


<?php function printNews($pages) { 
    printInColumns($pages, printNewsItem);
} ?>

<?php function printNewsItem($page) { ?>
    <div class="card mb-3 shadow-sm">
        <?php if (!empty($page->coverImage())): ?>
        <img src="<?php echo $page->coverImage(); ?>" class="card-img-top" alt="<?php echo $page->title(); ?>">
        <?php endif; ?>
        <div class="card-body">
            <h5 class="card-title"><?php echo $page->title(); ?></h5>
            <p class="card-text"><?php echo $page->content(); ?></p>
        </div>
    </div>            
<?php } ?>

<?php function printCatalogue($pages) { 
    printInColumns($pages, printCatalogueItem);
} ?>

<?php function printCatalogueItem($page) { ?>
    <div class="card mb-3 shadow-sm">
        <?php if (!empty($page->coverImage())): ?>
        <img src="<?php echo $page->coverImage(); ?>" class="card-img-top" alt="<?php echo $page->title(); ?>">
        <?php endif; ?>
        <div class="card-body">
            <h5 class="card-title"><?php echo $page->title(); ?></h5>
            <a href="<?php echo $page->permalink(); ?>" class="btn btn-primary">Lees meer</a>
        </div>
    </div>            
<?php } ?>

<!-- <div id="header" class="mb-3 rounded">&nbsp;</div> -->

<div id="header" class="mb-3">
    <div id="header-inner">
        <div id="header-text">Think global, drink local!</div>
    </div>
</div>

<div id="menu-small" class="text-center">
    <a href="#aanbod" class="btn btn-primary">Ons aanbod</a>
</div>

<div id="menu-large" class="text-center">
    <?php printMenu(getPagesForCategory("catalogus")); ?>
</div>

<!-- promotions -->
<div class="p-3">
    <p class="lead border-bottom font-weight-bold">Nieuws en promoties</p>
    <?php printNews(getPagesForCategory("nieuws-en-promotie")); ?>
</div>  

<!-- sections -->
<div id="aanbod" class="p-3">
    <p class="lead lead border-bottom font-weight-bold">Ons aanbod</p>
    <?php printCatalogue(getPagesForCategory("catalogus")); ?>
</div>