
<?php foreach ($news as $news_item): ?>

    <h3><?php echo $news_item['name']; ?></h3>
    <div class="main">
        <?php echo $news_item['description']; ?>
    </div>

<?php endforeach; ?>
