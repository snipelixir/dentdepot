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
        
        <div class="post">
            <div class="post-thumb"><a href="#"><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
            <h4><a href="#">New car arrivals...</a></h4>
            <div class="post-info"><a href="#">March 13, 2015</a>  / &nbsp;<a href="#"><span class="fa fa-comments"></span> &nbsp; 33</a></div>
        </div>
        
            <div class="post">
            <div class="post-thumb"><a href="#"><img src="images/resource/post-thumb-2.jpg" alt=""></a></div>
            <h4><a href="#">Our full servicelist</a></h4>
            <div class="post-info"><a href="#">March 11, 2015</a>  / &nbsp;<a href="#"><span class="fa fa-comments"></span> &nbsp; 12</a></div>
        </div>
        
            <div class="post">
            <div class="post-thumb"><a href="#"><img src="images/resource/post-thumb-3.jpg" alt=""></a></div>
            <h4><a href="#">Repaired cars</a></h4>
            <div class="post-info"><a href="#">March 10, 2015</a>  / &nbsp;<a href="#"><span class="fa fa-comments"></span> &nbsp; 52</a></div>
        </div>
        
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
    
    <!-- Latest Updates -->
    <div class="widget latest-updates">
        <div class="sec-title"><h3>Latest Updates</h3></div>
        <div class="update-box">
            <h4>Text Area</h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores.</p>
        </div>
        
    </div>


</aside>
