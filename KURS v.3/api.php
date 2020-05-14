<?php
function getAllusers($db) {

    $sql = "SELECT * FROM users1
            INNER JOIN groups1 ON users1.id_groups = groups1.id_groups
            INNER JOIN ages1 ON users1.id_ages = ages1.id_ages;
    ";
    $result = array();

    $stmt = $db->prepare($sql);
    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $result[$row['id_users']] = $row;
    }

    return $result;
}

function getAllgroups($db) {
    $sql = "SELECT * FROM ages1
            INNER JOIN users1 ON users1.id_ages = ages1.id_ages;
    ";
    $result = array();

    $stmt = $db->prepare($sql);

    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $result[$row['id_ages']] = $row;
    }

    return $result;
}

function getuserbyid($db, $id) {
    $sql = "SELECT * FROM users1
            WHERE id_users = :id_users;
    ";

    $stmt = $db->prepare($sql);
    $stmt->bindValue('id_users', $id, PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function saveuser($db, $name, $id) {
    $sql = "UPDATE users1
            SET user = :user
            WHERE id_users = :id_users
    ";

    $stmt = $db->prepare($sql);
    $stmt->bindValue(':user', $name, PDO::PARAM_STR);
    $stmt->bindValue(':id_users', $id, PDO::PARAM_INT);
    $stmt->execute();
}
//////////////////////

function getAllages($db) {
	$sql = "SELECT * FROM ages1";
	$res = array();

	$stmt = $db->prepare($sql);

	$stmt->execute();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$res[$row['id_ages']] = $row;
	}

	return $res;
}

function adduser($db, $user, $idages) {
	$sql = "INSERT INTO users1(user, id_ages) 
			VALUES(:user, :id_ages)
	";

	$stmt = $db->prepare($sql);
	$stmt->bindValue(':user', $user, PDO::PARAM_STR);
	$stmt->bindValue(':id_ages', $idages, PDO::PARAM_INT);
	$stmt->execute();

}

function deleteuser($db, $id) {
	$sql = "DELETE FROM users1 WHERE id_users = :id_users";

	$stmt = $db->prepare($sql);
	$stmt->bindValue(":id_users", $id, PDO::PARAM_INT);

	$stmt->execute();
}

function isUser($db,$user,$password){
	$sql = "SELECT user_login,user_password FROM people
	WHERE user_login = :user_login AND user_password = :user_password";

	$stmt = $db->prepare($sql);
	$stmt->bindValue(":user_login",$user,PDO::PARAM_STR);
	$stmt->bindValue(":user_password",$password,PDO::PARAM_STR);
	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	if(!empty($row)){
		return true;
	}else{
		return false;
	}
}
function getAllad($db) {

    $sql = "SELECT * FROM users1
            INNER JOIN groups1 ON users1.id_groups = groups1.id_groups
            INNER JOIN ages1 ON users1.id_ages = ages1.id_ages;
    ";
    $result = array();

    $stmt = $db->prepare($sql);
    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $result[$row['id_users']] = $row;
    }

    return $result;
}