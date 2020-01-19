<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
if (isset($_POST['poll_answer'])) {
        // Update and increase the number of votes the user voted for
        $stmt = $pdo->prepare('UPDATE poll_answer SET votes = votes + 1 WHERE id = ?');
        $stmt->execute([$_POST['poll_answer']]);
    }
?>

<?=template_header()?>
<div class="content poll-vote submit">
	<?php echo "Your Vote is recorded!";?></br>
	<a href="index.php">Go Back</a>
	<a href="result.php">View Results</a>
</div.>
<?=template_footer()?>