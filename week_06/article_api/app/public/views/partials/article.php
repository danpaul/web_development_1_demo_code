<div class="container mt-5">
    <h1 class="mb-4"><?php echo htmlspecialchars($article['title']); ?></h1>
    <p class="text-muted">
        <strong>By <?php echo htmlspecialchars($article['author']); ?></strong> | 
        <em><?php echo date('F j, Y, g:i a', strtotime($article['datetime'])); ?></em>
    </p>
    <hr>
    <div class="mb-4">
        <p><?php echo nl2br(htmlspecialchars($article['content'])); ?></p>
    </div>
    <a href="/articles" class="btn btn-primary">Back to Articles</a>
</div>