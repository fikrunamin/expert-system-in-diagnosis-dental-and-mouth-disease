<?php 

require_once 'config.php';
require_once 'auth/auth.php';

$_SESSION['evidence'] = [];
$disease = "";
$definition ="";
$treatment = "";

if (isset($_SESSION['symptoms'])) {
	for ($i=1; $i <= count($_SESSION['symptoms']) ; $i++) { 
		$s[$i] = $_SESSION['symptoms'][$i];
	}
	// $_SESSION['symptoms'] = [];

	for ($i=1; $i <= count($s); $i++) { 
		if ($s[$i] != false) {
			$sql = "SELECT * FROM symptoms WHERE symptom_id=:symptom_id";
			$stmt = $db->prepare($sql);
			$params = array(
			    ":symptom_id" => $s[$i],
			);

			$stmt->execute($params);
			$symptom = $stmt->fetch(PDO::FETCH_ASSOC);

			if ($symptom != false) {
				$_SESSION['evidence'][$i] = $symptom;
			}
		}
	}
}
else{
	header("Location: /KBS/agreement.php");
	exit();
}

$sql = "SELECT * FROM diseases";
$stmt = $db->prepare($sql);
$stmt->execute($params);
$dis = $stmt->fetchAll();

for ($i=1; $i <= count($dis) ; $i++) { 
	$sql = "SELECT * FROM diseases WHERE disease_id=:disease_id";
	$stmt = $db->prepare($sql);
	$params = array(
	    ":disease_id" => "d" . $i,
	);

	$stmt->execute($params);
	$ds = $stmt->fetch(PDO::FETCH_ASSOC);
	$d[$i] = $ds;
}


$sql = "SELECT * FROM treatments";
$stmt = $db->prepare($sql);
$stmt->execute($params);
$tr = $stmt->fetchAll();

for ($i=1; $i <= count($tr) ; $i++) { 
	$sql = "SELECT * FROM treatments WHERE treatment_id=:treatment_id";
	$stmt = $db->prepare($sql);
	$params = array(
	    ":treatment_id" => "t" . $i,
	);

	$stmt->execute($params);
	$treat = $stmt->fetch(PDO::FETCH_ASSOC);
	$t[$i] = $treat;
}

// Implemented Rules

if($s[2] != false AND $s[1] != false AND $s[3] != false){
	$disease .= " " . $d[1]['disease_name'] . ",";
	$definition .= "<b>" . $d[1]['disease_name'] . "</b> is " . $d[1]['disease_desc'] . ".<br>"; 
	$treatment .= "<b>" . $d[1]['disease_name'] . "</b> : " . $t[1]['treatment_desc'] . ".<br>";
}
if($s[7] != false AND $s[1] != false AND $s[4] != false AND $s[8] != false AND $s[5] != false AND $s[6] != false){
	$disease .= " " . $d[2]['disease_name'] . ",";
	$definition .= "<b>" . $d[2]['disease_name'] . "</b> is " . $d[2]['disease_desc'] . ".<br>"; 
	$treatment .= "<b>" . $d[2]['disease_name'] . "</b> : " . $t[2]['treatment_desc'] . ".<br>";
}
if($s[7] != false AND $s[9] != false AND $s[10] != false){
	$disease .= " " . $d[3]['disease_name'] . ",";
	$definition .= "<b>" . $d[3]['disease_name'] . "</b> is " . $d[3]['disease_desc'] . ".<br>"; 
	$treatment .= "<b>" . $d[3]['disease_name'] . "</b> : " . $t[3]['treatment_desc'] . ".<br>";
}
if($s[11] != false AND $s[12] != false){
	$disease .= " " . $d[4]['disease_name'] . ",";
	$definition .= "<b>" . $d[4]['disease_name'] . "</b> is " . $d[4]['disease_desc'] . ".<br>"; 
	$treatment .= "<b>" . $d[4]['disease_name'] . "</b> : " . $t[4]['treatment_desc'] . ".<br>";
}
if($s[11] != false AND $s[13] != false AND $s[14] != false AND $s[15] != false){
	$disease .= " " . $d[5]['disease_name'] . ",";
	$definition .= "<b>" . $d[5]['disease_name'] . "</b> is " . $d[5]['disease_desc'] . ".<br>"; 
	$treatment .= "<b>" . $d[5]['disease_name'] . "</b> : " . $t[5]['treatment_desc'] . ".<br>";
}
if($s[2] != false AND $s[16] != false AND $s[17] != false AND $s[18] != false){
	$disease .= " " . $d[6]['disease_name'] . ",";
	$definition .= "<b>" . $d[6]['disease_name'] . "</b> is " . $d[6]['disease_desc'] . ".<br>"; 
	$treatment .= "<b>" . $d[6]['disease_name'] . "</b> : " . $t[6]['treatment_desc'] . ".<br>";
}
if($s[2] != false AND $s[5] != false AND $s[6] != false AND $s[19] != false AND $s[20] != false){
	$disease .= " " . $d[7]['disease_name'] . ",";
	$definition .= "<b>" . $d[7]['disease_name'] . "</b> is " . $d[7]['disease_desc'] . ".<br>"; 
	$treatment .= "<b>" . $d[7]['disease_name'] . "</b> : " . $t[7]['treatment_desc'] . ".<br>";
}
if($s[7] != false AND $s[1] != false AND $s[4] != false AND $s[8] != false AND $s[2] != false){
	$disease .= " " . $d[8]['disease_name'] . ",";
	$definition .= "<b>" . $d[8]['disease_name'] . "</b> is " . $d[8]['disease_desc'] . ".<br>"; 
	$treatment .= "<b>" . $d[8]['disease_name'] . "</b> : " . $t[8]['treatment_desc'] . ".<br>";
}
if($s[21] != false AND $s[22] != false AND $s[23] != false AND $s[24] != false){
	$disease .= " " . $d[9]['disease_name'] . ",";
	$definition .= "<b>" . $d[9]['disease_name'] . "</b> is " . $d[9]['disease_desc'] . ".<br>"; 
	$treatment .= "<b>" . $d[9]['disease_name'] . "</b> : " . $t[9]['treatment_desc'] . ".<br>";
}
if($s[26] != false AND $s[25] != false AND $s[11] != false){
	$disease .= " " . $d[10]['disease_name'] . ",";
	$definition .= "<b>" . $d[10]['disease_name'] . "</b> is " . $d[10]['disease_desc'] . ".<br>"; 
	$treatment .= "<b>" . $d[10]['disease_name'] . "</b> : " . $t[10]['treatment_desc'] . ".<br>";
}
if($s[26] != false AND $s[25] != false AND $s[27] != false AND $s[28] != false){
	$disease .= " " . $d[11]['disease_name'] . ",";
	$definition .= "<b>" . $d[11]['disease_name'] . "</b> is " . $d[11]['disease_desc'] . ".<br>"; 
	$treatment .= "<b>" . $d[11]['disease_name'] . "</b> : " . $t[11]['treatment_desc'] . ".<br>";
}
if($s[26] != false AND $s[29] != false){
	$disease .= " " . $d[12]['disease_name'] . ",";
	$definition .= "<b>" . $d[12]['disease_name'] . "</b> is " . $d[12]['disease_desc'] . ".<br>"; 
	$treatment .= "<b>" . $d[12]['disease_name'] . "</b> : " . $t[12]['treatment_desc'] . ".<br>";
}
if($s[7] != false AND $s[30] != false AND $s[31] != false){
	$disease .= " " . $d[13]['disease_name'] . ",";
	$definition .= "<b>" . $d[13]['disease_name'] . "</b> is " . $d[13]['disease_desc'] . ".<br>"; 
	$treatment .= "<b>" . $d[13]['disease_name'] . "</b> : " . $t[13]['treatment_desc'] . ".<br>";
}
if($s[7] != false AND $s[16] != false AND $s[32] != false AND $s[33] != false){
	$disease .= " " . $d[14]['disease_name'] . ",";
	$definition .= "<b>" . $d[14]['disease_name'] . "</b> is " . $d[14]['disease_desc'] . ".<br>"; 
	$treatment .= "<b>" . $d[14]['disease_name'] . "</b> : " . $t[14]['treatment_desc'] . ".<br>";
}
if($s[26] != false AND $s[34] != false AND $s[35] != false AND $s[36] != false){
	$disease .= " " . $d[15]['disease_name'] . ",";
	$definition .= "<b>" . $d[15]['disease_name'] . "</b> is " . $d[15]['disease_desc'] . ".<br>"; 
	$treatment .= "<b>" . $d[15]['disease_name'] . "</b> : " . $t[15]['treatment_desc'] . ".<br>";
}
if($s[7] != false AND $s[16] != false AND $s[2] != false AND $s[19] != false AND $s[37] != false){
	$disease .= " " . $d[16]['disease_name'] . ",";
	$definition .= "<b>" . $d[16]['disease_name'] . "</b> is " . $d[16]['disease_desc'] . ".<br>"; 
	$treatment .= "<b>" . $d[16]['disease_name'] . "</b> : " . $t[16]['treatment_desc'] . ".<br>";
}
if(count(array_unique($s)) === 1 AND $disease == "") { 
	$disease = "Cannot identify your disesase. I think you are fine. ";
	$definition = "No disease detected.";
	$treatment = "No disease detected.";
}
if ($disease == "") {
	$disease = "Upss, sorry. We cannot identify your disesase.";
	$definition = "No disease detected.";
	$treatment = "No disease detected.";
}

$disease = str_split($disease);
$disease[count($disease)-1] = ".";
$disease = implode($disease);

$_SESSION['disease'] = $disease;
$_SESSION['definition'] = $definition;
$_SESSION['treatment'] = $treatment;

if (isset($_SESSION['evidence'])) {
	$user_id = $_SESSION['login']['user_id'];
	$created_at = date("Y-m-d H:i:s");
	$symptoms = "";

	if(count(array_unique($s)) === 1) { 
		$symptoms = "No symptom detected.";
	}
	else{
		$j = 1;
		for ($i=1; $i <= count($s); $i++) { 
			if (isset($_SESSION['evidence'][$i])) {
				$symptoms .= $j . ". " . $_SESSION['evidence'][$i]['symptom_desc'] . "<br>";
				$j++;
			}
		}
	}

	$sql = "INSERT INTO reports VALUES ('', :user_id, :disease, :symptoms, :definition, :treatment, :created_at)";
    $stmt = $db->prepare($sql);

    $params = array(
        ":user_id" => $user_id,
        ":disease" => $disease,
        ":symptoms" => $symptoms,
        ":definition" => $definition,
        ":treatment" => $treatment,
        ":created_at" => $created_at
    );

    $report_saved = $stmt->execute($params);
}
if ($report_saved) {
	header_remove();
	header("Location: /KBS/report.php");
	exit();
}

