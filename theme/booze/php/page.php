<div class="container pl-5 pt-3">
    <img src="<?php echo $page->coverImage(); ?>" class="cover-image rounded float-right ml-2 mb-3">
    <h1 class="title"><?php echo $page->title(); ?></h1>
    <?php echo $page->content(); ?>
</div>