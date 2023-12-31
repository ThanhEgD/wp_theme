<?php if (have_posts()): while (have_posts()): the_post(); ?>

    <?php the_content(); ?>

    <!--list tags-->
    <?php
    $tags = get_the_tags();
    if ($tags):
        foreach ($tags as $tag):
            ?>
            <a href="<?php echo get_tag_link($tag->term_id); ?>" class="badge bg-success">
                <?php echo $tag->name; ?>
            </a>
        <?php endforeach; endif;?>

    <!--list category-->
    <?php
    $categories = get_the_category();
    foreach ($categories as $category):
        ?>
        <a href="<?php echo get_category_link($category->term_id)?>">
            <?php echo $category->name; ?>
        </a>
    <?php endforeach; ?>

    <!--comment-->
    <?php //comments_template(); ?>

    <!--list date-->
    <p><?php echo get_the_date('l jS F, Y'); ?></p>

<?php endwhile; else: endif;?>
