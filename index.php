<?php
include 'functions.php';
// Connect to MySQL
$pdo = pdo_connect_mysql();
// MySQL query that selects all the poll answers
$stmt = $pdo->prepare('SELECT * FROM poll_answer');
$stmt->execute();
// Fetch all the poll anwsers
$poll_answers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header()?>

<div class="content poll-vote">
    
    <h2>Who is your favourite author?</h2>
    <form action="submit.php" method="post">
        <?php for ($i = 0; $i < count($poll_answers); $i++): ?>
        <label>
            <input type="radio" name="poll_answer" value="<?=$poll_answers[$i]['id']?>"
            <?=$i == 0 ? 'checked' : '' ?>>
            <?=$poll_answers[$i]['author']?>
        </label>
        <?php endfor; ?>
        <div>
            <input type="submit" value="Vote">
            <a href="result.php">View Results</a>
        </div>
    </form>
</div>

<?=template_footer()?>
