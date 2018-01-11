<!-- Pagination -->
<?php
if(get_the_posts_pagination()){
    $links = paginate_links(['type' => 'array']);
?>

<ul class="pagination wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
    <?php foreach ($links as $link) : ?>
        <li><?= $link ?></li>
    <?php endforeach; ?>
</ul>

<?php } ?>
