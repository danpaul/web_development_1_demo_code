<div class="container mt-5">
    <h1 class="mb-4">Articles</h1>

    <!-- Form to submit a new article -->
    <form id="article-form" class="mb-4">
        <div class="mb-3">
            <label for="article-title" class="form-label">Title</label>
            <input type="text" class="form-control" id="article-title" required>
        </div>
        <div class="mb-3">
            <label for="article-content" class="form-label">Content</label>
            <textarea class="form-control" id="article-content" rows="5" required></textarea>
        </div>
        <div class="mb-3">
            <label for="article-author" class="form-label">Author</label>
            <input type="text" class="form-control" id="article-author" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit Article</button>
    </form>

    <!-- Container to display articles -->
    <div id="articles-container"></div>
</div>

<!-- add a link to the js script -->
<script
    src="/assets/js/articles.js"></script>
<?
