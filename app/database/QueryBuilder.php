<?php

namespace App\Database;


class QueryBuilder {

    private static $pdo;

    public static function make( \PDO $pdo ) {
        self::$pdo = $pdo;
    }

    public static function get($table ,$where = null) {
        $queryStr = "SELECT * FROM {$table}";
        if(is_array($where)){
            $queryStr .= " WHERE " . implode(' ',$where);
        }
        $query = self::$pdo ->prepare($queryStr);
        $query->execute();
        return $query->fetchAll( \PDO::FETCH_OBJ );
    }

    public  static function insert( $table, $data ) {
        $fields = array_keys( $data );
        $fieldStr = implode( ',', $fields );
        $valueStr = str_repeat( '?,', count( $fields )-1 ) . '?';
        $query = "INSERT INTO {$table} ({$fieldStr}) VALUES({$valueStr})";
        $statement = self::$pdo->prepare( $query );
        $statement->execute( array_values( $data ) );
    }

    public static function update( $table, $id, $data ) {
        $fields = implode( '= ? ,', array_keys( $data ) ) . ' = ?';
        $values = array_values( $data );
        $query = "UPDATE {$table} SET {$fields} WHERE id = {$id}";
        $statement = self::$pdo->prepare( $query );
        $statement->execute( $values );

    }

    public static function delete($table,$id, $column = 'id', $operator = '='){
     $query = "DELETE FROM {$table} WHERE {$column} {$operator } {$id}";
     $statement = self::$pdo->prepare($query);
     $statement->execute();
    }

}

?>