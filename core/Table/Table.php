<?php
namespace Core\Table;

use Core\Database\Database;

class Table
{

    protected $table;
    protected $db;

    

    public function __construct(Database $db)
    {
        $this->db = $db;
        if (is_null($this->table)) {
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name)) . 's';
        }
    }

    protected function count(){
        return $this->query("SELECT COUNT(id) as nbrow FROM $this->table",null,true,null);
    }

    public function all(){
        return $this->query('SELECT * FROM ' . $this->table);
    }

    public function find($id){
        return $this->query("SELECT * FROM {$this->table} WHERE id = ?", [$id], true);
    }

    public function update($id, $fields){
        $sql_parts = [];
        $attributes = [];
        foreach($fields as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $attributes[] = $id;
        $sql_part = implode(', ', $sql_parts);
        return $this->query("UPDATE {$this->table} SET $sql_part WHERE id = ?", $attributes, true);
    }

    public function delete($id){
        return $this->query("DELETE FROM {$this->table} WHERE id = ?", [$id], true);
    }

    public function create($fields){
        $sql_parts = [];
        $attributes = [];
        foreach($fields as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $sql_part = implode(', ', $sql_parts);
        return $this->query("INSERT INTO {$this->table} SET $sql_part", $attributes, true);
    }

    public function extract($key, $value){
        $records = $this->all();
        $return = [];
        foreach($records as $v){
            $return[$v->$key] = $v->$value;
        }
        return $return;
    }

    public function query($statement, $attributes = null, $one = false, $classename = false){
        if($classename===false){
            $classename= str_replace('Table', 'Entity', get_class($this));
        }

        if($attributes){

            return $this->db->prepare(
                $statement,
                $attributes,
                $classename,
                $one
            );
        } else {
            return $this->db->query(
                $statement,
                $classename,
                $one
            );
        }
    }

    public function pagination($page = 1, $nbDisplay = 2){
        $nbRows = $this->count();
        $pagination = round((int)$nbRows->nbrow / $nbDisplay);
        $start = $page * $nbDisplay - $nbDisplay;
        $resultats = $this->query(" SELECT articles.title,
         articles.text,
         DATE_FORMAT(date, 'Le %d/%m/%Y à %H:%i:%s') as date_creation_fr,
         users.pseudo FROM $this->table 
         LEFT JOIN users ON articles.users_id = users.id 
         ORDER BY date_creation_fr DESC 
         LIMIT $start, $nbDisplay");
        $resultats['nbpage']=$pagination;
        return $resultats;
    }

}