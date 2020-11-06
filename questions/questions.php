<?php

if (isset($_GET['question'])) {
	$question = $_GET['question'];
	if ($question < 1 || $question == 1) {
		$question = 1;
		$_SESSION['symptoms'] = [];
		header("Location: /KBS/forms.php?question=1");
	} elseif ($question > 37) {
		$question = 37;
		header("Location: /KBS/forms.php?question=37");
	}

	//====================================== Rule starts here ==============================================//

	if ($_SESSION['symptoms'][1] == false) {
		if ($question == 3 || $question == 4 || $question == 5 || $question == 6 || $question == 8) {
			header("Location: ?question=" . ((int) $question + 1));
		}
	}

	if ($_SESSION['symptoms'][2] == false) {
		if ($question == 16 || $question == 17 || $question == 18 || $question == 19 || $question == 20) {
			header("Location: ?question=" . ((int) $question + 1));
		}
	}

	if ($_SESSION['symptoms'][7] == false) {
		if ($question == 9 || $question == 10 || $question == 30 || $question == 31 || $question == 32 || $question == 33 || $question == 37) {
			if ($question != 37) {
				header("Location: ?question=" . ((int) $question + 1));
			} else {
				header("Location: /KBS/rule_process.php");
			}
		}
	}

	if ($_SESSION['symptoms'][11] == false) {
		if ($question == 12 || $question == 13 || $question == 14 || $question == 15) {
			header("Location: ?question=" . ((int) $question + 1));
		}
	}

	if ($_SESSION['symptoms'][21] == false) {
		if ($question == 22 || $question == 23 || $question == 24) {
			header("Location: ?question=" . ((int) $question + 1));
		}
	}

	if ($_SESSION['symptoms'][25] == false) {
		if ($question == 27 || $question == 28) {
			header("Location: ?question=" . ((int) $question + 1));
		}
	}

	if ($_SESSION['symptoms'][26] == false) {
		if ($question == 29 || $question == 34 || $question == 35 || $question == 36) {
			header("Location: ?question=" . ((int) $question + 1));
		}
	}
} else {
	for ($i = 1; $i <= 37; $i++) {
		if ($i == 1 || $i == 2 || $i == 7 || $i == 11 || $i == 21 || $i == 25 || $i == 26) {
			$_SESSION['symptoms'][$i] = false;
		} else {
			$_SESSION['symptoms'][$i] = false;
		}
	}
	$_GET['question'] = 1;
	$question = $_GET['question'];
}

$q_id = "q" . $question;

$sql = "SELECT * FROM questions WHERE question_id=:q_id";
$stmt = $db->prepare($sql);

$params = $params = array(
	":q_id" => $q_id,
);

$stmt->execute($params);

$data['question'] = $stmt->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['add_evidence'])) {
	$evidence = "s" . ($question);

	$_SESSION['symptoms'][$question] = $evidence;
	header("Location: ?question=" . ((int) $question + 1));
} elseif (isset($_POST['no_evidence'])) {
	$_SESSION['symptoms'][$question] = false;

	if ($question == 2 || $question == 3 || $question == 4 || $question == 5 || $question == 6) header("Location: ?question=7");
	elseif ($question == 8) header("Location: ?question=9");
	elseif ($question == 16 || $question == 17 || $question == 18 || $question == 19 || $question == 20) header("Location: ?question=21");
	elseif ($question == 9 || $question == 10) header("Location: ?question=11");
	elseif ($question == 30 || $question == 31 || $question == 32 || $question == 33) header("Location: ?question=34");
	elseif ($question == 12 || $question == 13 || $question == 14 || $question == 15) header("Location: ?question=16");
	elseif ($question == 22 || $question == 23 || $question == 24)  header("Location: ?question=25");
	elseif ($question == 27 || $question == 28) header("Location: ?question=29");
	elseif ($question == 29) header("Location: ?question=30");
	elseif ($question == 34 || $question == 35 || $question == 36) header("Location: ?question=37");
	else header("Location: ?question=" . ((int) $question + 1));
} elseif (isset($_POST['create_report'])) {
	$_POST['add_evidence'] = "s" . ($question);
	$evidence = $_POST['add_evidence'];

	$_SESSION['symptoms'][$question] = $evidence;

	header("Location: /KBS/rule_process.php");
} elseif (isset($_POST['no_evidence_create_report'])) {
	$_SESSION['symptoms'][$question] = false;

	header("Location: /KBS/rule_process.php");
}

$previous = intval($question) - 1;

?>

<div id="q1" class="animated fadeInRight">
	<img src="img/<?= $data['question']['picture'] ?>" width="150px">
	<h3 class="mt-5"><?= $data['question']['question'] ?></h3>
	<p class="lead mt-4">
		<?php if ($question == 37) : ?>
			<form action="" method="POST">
				<button class="btn btn-md btn-primary" type="submit" name="create_report">Yes</button>
				<button class="btn btn-md btn-danger" type="submit" name="no_evidence_create_report">No</button>
			</form>
		<?php else : ?>
			<form action="" method="POST">
				<button class="btn btn-md btn-primary" type="submit" name="add_evidence">Yes</button>
				<button class="btn btn-md btn-danger" type="submit" name="no_evidence">No</button>
			</form>
		<?php endif ?>
	</p>
</div>

<hr>

<?php if ($question > 2) : ?>
	<a class="text-left" href="?question=<?= $previous ?>"> &larr;Previous question</a>
<?php elseif ($question == 2) : ?>
	<a class="text-left" href="/KBS/forms.php"> &larr;Previous question</a>
<?php endif ?>

<!-- <br><br><a class="text-left" href="#">Predicted Outcome&rarr;</a> -->