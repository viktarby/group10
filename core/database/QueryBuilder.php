<?php

class QueryBuilder
{
    /** @var  mysqli */
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function insert($table, array $data)
    {
        $keys = array_keys($data);
        // INSERT INTO %s (%s) VALUES ('%s')
        $sql = sprintf(
            "INSERT INTO %s (%s) VALUES (%s)",
            $table,
            implode(', ', $keys),
            "'" . implode("', '", $data) . "'"
        );

        return $this->db->query($sql);
    }

    public function selectAll($table)
    {
        $sql = "SELECT * FROM $table";

        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }
    public function update($table, array $data, array $where){

        //$id = $where['id'];
        $select = $data['sel'];
        $keys = array_keys($data['complete']);

        if ($select=="u") {
            $sql = sprintf("UPDATE %s SET %s WHERE %s",
                $table,
                "id = \"" . $where['id'] . "\"",
                "keyss IN (" . implode(",", $keys).")"
            );
        }

        else {
            $sql = sprintf("DELETE FROM %s WHERE %s",
                $table,
                "keyss IN (" . implode(",", $keys).")"
            );


        }

        return $this->db->query($sql);
    }
}