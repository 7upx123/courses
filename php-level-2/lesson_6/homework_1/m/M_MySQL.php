<?php

class M_MySQL
{
	public function __construct() {
		require_once 'dbconfig.php';

		// Языковая настройка
		setlocale(LC_ALL, 'ru_RU.UTF-8');
		date_default_timezone_set('Europe/Moscow');

		// Подключение к БД
		mysql_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die ('No connect with data base');
		mysql_query('SET NAMES utf-8');
		mysql_select_db(DB_NAME) or die('No data base');
	}

	public function select($query) {
		$result = mysql_query($query);

		if (!$result) die(mysql_error());

		// Извлечение из БД
		$n = mysql_num_rows($result);
		$articles = array();

		for ($i = 0; $i < $n; $i++) {
			$row = mysql_fetch_assoc($result);
			$articles[] = $row;
		}

		return $articles;
	}

	public function delete($id) {
		$id = mysql_real_escape_string($id);
		$t = "DELETE FROM " . DB_TABLE_NAME . " WHERE id_article = '$id'";

		$result = mysql_query($t);

		if (!$result) die(mysql_error());

		return true;
	}

	public function insert($object) {
		$columns = array();
		$values = array();

		foreach ($object as $key => $value) {
			$key = mysql_real_escape_string($key . '');
			$columns[] = $key;

			if ($value === null) {
				$values[] = 'NULL';
			} else {
				$value = mysql_real_escape_string($value . '');
				$values[] = "'$value'";
			}
		}

		$columns_s = implode(',', $columns);
		$values_s = implode(',', $values);

		$query = "INSERT INTO " . DB_TABLE_NAME . " ($columns_s) VALUES ($values_s)";
		$result = mysql_query($query);

		if (!$result)
			die(mysql_error());

		return mysql_insert_id();
	}

	public function update($object, $where) {
		$sets = array();

		foreach ($object as $key => $value) {
			$key = mysql_real_escape_string($key . '');

			if ($value === null) {
				$sets[] = "$key=NULL";
			} else {
				$value = mysql_real_escape_string($value . '');
				$sets[] = "$key='$value'";
			}
		}

		$sets_s = implode(',', $sets);

		$query = "UPDATE " . DB_TABLE_NAME . " SET $sets_s WHERE $where";

		$result = mysql_query($query);

		if (!$result)
			die(mysql_error());

		return mysql_affected_rows();
	}
}
