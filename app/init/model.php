<?php
class Model
{
    private $connection;

    public function __construct()
    {
        $database = [
            "dbname" => "./app/database.db"
        ];

        $this->connection = new SQLite3($database['dbname']);

        if (!$this->connection) {
            die("Failed to connect to SQLite database");
        }
    }
    
	//insert
	/*input = [
		"data"		=> "column1,column2",
        "tableName" => "name",
		"bind"		=> [
			"sss",
			value1,
			value2,
			value3
		]
	]		
	*/
    public function insert($input)
    {
        $columns = explode(",", $input['data']);
        $placeholders = implode(",", array_fill(0, count($columns), "?"));
        $sql = "INSERT INTO " . $input['tableName'] . "(" . $input['data'] . ") VALUES (" . $placeholders . ")";

        $stmt = $this->connection->prepare($sql);
        for ($i = 0; $i < count($input['bind']); $i++) {
            $stmt->bindParam($i + 1, $input['bind'][$i]);
        }

        $result = $stmt->execute();

        if ($result) {
            return $this->connection->lastInsertRowID();
        } else {
            return false;
        }
    }

	//update
	/*input = [
		"data"		=> "column=?"
        "tableName" => "name",
		"condition"	=> "",
		"bind"		=> [
			"sss",
			value1,
			value2,
			value3
		]
	]		
	*/
    public function update($input)
    {
        $sql = "UPDATE " . $input['tableName'] . " SET " . $input['data'] . " WHERE " . $input['condition'];

        $stmt = $this->connection->prepare($sql);
        for ($i = 0; $i < count($input['bind']); $i++) {
            $stmt->bindParam($i + 1, $input['bind'][$i]);
        }

        $result = $stmt->execute();

        return $result;
    }

	//delete
	/*input = [
		"condition"	=> "",
        "tableName" => "name",
		"bind"		=> [
			"sss",
			value1,
			value2,
			value3
		]
	]		
	*/
    public function delete($input)
    {
        $sql = "DELETE FROM " . $input['tableName'] . " WHERE " . $input['condition'];

        $stmt = $this->connection->prepare($sql);
        for ($i = 0; $i < count($input['bind']); $i++) {
            $stmt->bindParam($i + 1, $input['bind'][$i]);
        }

        $result = $stmt->execute();

        return $result;
    }

	//selectOne
	/*input = [
		"column"	=> "",
        "tableName" => "name",
		"condition"	=> "",
		"order"		=> "",
		"group"		=> "",
		"having"	=> "",
		"bind"		=> [
			"sss",
			value1,
			value2,
			value3
		]
	]		
	*/
    public function selectOne($input)
    {
        $sql = "SELECT " . $input['column'] . " FROM " . $input['tableName'];
        if (isset($input['condition'])) {
            $sql .= " WHERE " . $input['condition'];
        }
        if (isset($input['order'])) {
            $sql .= " ORDER BY " . $input['order'];
        }
        if (isset($input['group'])) {
            $sql .= " GROUP BY " . $input['group'];
        }
        if (isset($input['having'])) {
            $sql .= " HAVING " . $input['having'];
        }

        $stmt = $this->connection->prepare($sql);
        for ($i = 0; $i < count($input['bind']); $i++) {
            $stmt->bindParam($i + 1, $input['bind'][$i]);
        }

        $result = $stmt->execute();

        if ($result->numColumns() > 0) {
            return $result->fetchArray(SQLITE3_ASSOC);
        } else {
            return false;
        }
    }

    //selectMulti
	/*input = [
		"column"	=> "",
        "tableName" => "name",
		"condition"	=> "",
		"order"		=> "",
		"group"		=> "",
		"having"	=> "",
		"limit"		=> "",
		"bind"		=> [
			"sss",
			value1,
			value2,
			value3
		]
	]		
	*/
    public function selectMulti($input)
    {
        $sql = "SELECT " . $input['column'] . " FROM " . $input['tableName'];
        if (isset($input['condition'])) {
            $sql .= " WHERE " . $input['condition'];
        }
        if (isset($input['order'])) {
            $sql .= " ORDER BY " . $input['order'];
        }
        if (isset($input['group'])) {
            $sql .= " GROUP BY " . $input['group'];
        }
        if (isset($input['having'])) {
            $sql .= " HAVING " . $input['having'];
        }

        $stmt = $this->connection->prepare($sql);
        for ($i = 0; $i < count($input['bind']); $i++) {
            $stmt->bindParam($i + 1, $input['bind'][$i]);
        }

        $result = $stmt->execute();

        if ($result->numColumns() > 0) {
            $rows = [];
            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return false;
        }
    }

    // just put your query
    public function query($sql){
        $result = $this->connection->query($sql);

        if($result){
            $rows = [];
            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return false;
        }
    }

	/*
		"bind" = [
			"sss",
			value1,
			value2,
			value3
		]
	*/
    public function queryPrepare($sql, $bind){
        $stmt = $this->connection->prepare($sql);

        foreach ($bind as $key => $value) {
            $stmt->bindValue($key + 1, $value);
        }

        $result = $stmt->execute();

        if($result){
            $rows = [];
            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return false;
        }
    }
}