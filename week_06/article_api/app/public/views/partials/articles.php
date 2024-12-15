
<div class="container mt-5">
<h2 class="mb-4">Articles:</h2>
<?php foreach ($articles as $article) { ?>
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-body">
                <a href="/article/<?= $article['id']; ?>">
                    <h5 class="card-title"><?php echo htmlspecialchars($article['title']); ?></h5>
                </a>
                <p class="card-text"><?php echo htmlspecialchars($article['content']); ?></p>
                <p class="text-muted">
                    <small>
                        By <?php echo htmlspecialchars($article['author']); ?> on 
                        <?php echo date('F j, Y, g:i a', strtotime($article['datetime'])); ?>
                    </small>
                </p>
            </div>
        </div>
    </div>
<?php } ?>
</div>

<div class="container mt-5">
    <h2 class="mb-4">Create a New Article</h2>
    <form action="/article" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Article Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
        <div class="mb-3">
            <label for="datetime" class="form-label">Date and Time</label>
            <input type="datetime-local" class="form-control" id="datetime" name="datetime" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>