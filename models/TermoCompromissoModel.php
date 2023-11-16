<?php

namespace Model;

use Model\VO\DocumentosVO;
use Util\Database;

final class TermoCompromissoModel extends Model {

    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select("SELECT * FROM termo_compromisso");

        $array = [];

        foreach($data as $row) {
            $array[] = new DocumentosVO($row['id'], $row['url']);            
        }

        return $array;
    }

    public function selectOne($vo = null) {
        $db = new Database();
        $query = "SELECT * FROM termo_compromisso WHERE id = :id";
        $binds = [":id" => $vo->getId()];
        $data = $db->select($query, $binds);
        
        if (count($data) == 0) {
            return null;
        }

        return new DocumentosVO($data[0]['id'], $data[0]['url']);
    }

    public function insert($vo) {

        $db = new Database();
        $query = "INSERT INTO termo_compromisso (url) VALUES (:url)";
        $binds = [
            ":url" => $vo->getUrl()
        ];

        $sucess = $db->execute($query, $binds);

        if ($sucess) {
            return $db->getLastInsertedId();
        } else {
            return null;
        }

    }

    public function update($vo) {

        $db = new Database();
        $binds = [
            ":url" => $vo->getUrl(),
            ":id" => $vo->getId()
        ];

        if(empty($vo->getUrl())){
            return false;
        }

        $query = "UPDATE termo_compromisso SET url = :url WHERE id = :id";
        return $db->execute($query, $binds);

    }

    public function delete($vo) {

        $db = new Database();
        $query = "DELETE FROM termo_compromisso WHERE id = :id";
        $binds = [
            ":id" =>  $vo->getId()
        ];

        return $db->execute($query, $binds);

    }


}