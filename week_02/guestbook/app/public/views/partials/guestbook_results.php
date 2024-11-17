<div class="container mt-5">
    <h2 class="text-center mb-4">Guestbook Messages</h2>

    <!-- Loop through guestbook messages -->
    <?php foreach ($guestbookMessages as $message): ?>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">
                    <?php echo htmlspecialchars($message->name); ?>
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <?php echo htmlspecialchars($message->email); ?>
                </h6>
                <p class="card-text">
                    <?php echo htmlspecialchars($message->message); ?>
                </p>
                <p class="text-end text-muted small">
                    Posted on <?php echo htmlspecialchars($message->createdAt); ?>
                </p>
            </div>
        </div>
    <?php endforeach; ?>
</div>