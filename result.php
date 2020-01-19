<?php
include 'functions.php';
// Connect to MySQL
$pdo = pdo_connect_mysql();
// MySQL Query that will get all the answers from the "poll_answer" table ordered by the number of votes (descending)
$stmt = $pdo->prepare('SELECT * FROM poll_answer ORDER BY votes DESC');
$stmt->execute();
// Fetch all poll answers
$poll_answers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header()?>

<div class="content poll-result">
    <h2>Who is your favourite author?</h2>
    <div class="wrapper">
        <?php foreach ($poll_answers as $poll_answer): ?>
        <div class="poll-question">
            <p><?=$poll_answer['author']?><span>(<?=$poll_answer['votes']?> Votes)</span></p>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="return-back">
        <a href="index.php">Vote Again</a>
    </div>
</div>

<?=template_footer()?>