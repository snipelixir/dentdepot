<aside class="side-bar col-lg-3 col-md-4 col-sm-5 col-xs-12">
                	
    <!-- Search Form -->
    <div class="widget search-form">
        
        <form role="search" method="get" id="searchform" class="searchform" action="<?=bloginfo('url')?>">
            <div class="form-group">
                <input type="search" name="s" id="s" value="" placeholder="search for something">
                <button type="submit" id="searchsubmit"><span class="fa fa-search"></span></button>
            </div>
        </form>
        
    </div>
    
    <!-- Latest Posts -->
    <div class="widget latest-posts">
        <div class="sec-title"><h3>Latest Blog Posts</h3></div>
        
        <?php
        $args = array(
            'numberposts' => 3,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'publish',
        );

        $recent_posts = wp_get_recent_posts($args, ARRAY_A);
        foreach ($recent_posts as $recent): ?>
            <div class="post">
                <div class="post-thumb"><a href="#"><?= get_the_post_thumbnail($recent['ID'], array(71, 67)); ?></a></div>
                <h4><a href="<?= get_permalink($recent["ID"]) ?>"><?= substr($recent['post_title'], 0, 16) ?> ...</a></h4>
                <div class="post-info"><a href="<?= get_permalink($recent["ID"]) ?>"><?php echo get_the_date('F j, Y', $recent["ID"]); ?></a></div>
            </div>

        <?php endforeach;
        wp_reset_query(); ?>
        
    </div>
    
    <!-- Popular Tags -->
    <div class="widget tags">
        <div class="sec-title"><h3>Popular tags</h3></div>
        
        <?php
        $tags = get_tags();
        $html = '<div class="post_tags">';
        foreach ($tags as $tag) {
            $tag_link = get_tag_link($tag->term_id);

            $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
            $html .= "{$tag->name}</a>";
        }
        $html .= '</div>';
        echo $html;
        ?>

    </div>

    <!-- widget area -->
    <?php if(! dynamic_sidebar('blog')): ?>
        <div class="widget latest-updates">
            <div class="sec-title"><h3>Set some widget here</h3></div>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
        </div>
    <?php endif; ?>


</aside>
