<?php

namespace DefaultBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

class CIndustryRepository extends EntityRepository {

    public function findByTexField($text, $text_trslt, $text_crrct) {
        $sql = '(SELECT id, title as name, title as value_name, "direction" AS type, "Округа" AS title, "" as join_id, "" as color FROM l_directions WHERE title LIKE :text OR title LIKE :text_trslt OR title LIKE :text_crrct LIMIT 2)';
        $sql .= ' UNION ';
        $sql .= '(SELECT id, title as name, title as value_name, "metro" AS type, "Метро" AS title, "" as join_id, "" as color FROM l_metros WHERE title LIKE :text OR title LIKE :text_trslt OR title LIKE :text_crrct LIMIT 5)';
        $sql .= ' UNION ';
        $sql .= '(SELECT id, title as name, title as value_name, "highway" AS type, "Шоссе" AS title, "" as join_id, "" as color FROM l_highways WHERE title LIKE :text OR title LIKE :text_trslt OR title LIKE :text_crrct LIMIT 5)';
        $sql .= ' UNION ';
        $sql .= '(SELECT id, address as name, address as value_name, "id" as type, "Адрес" as title, "" as join_id, "" as color 
                    FROM c_industry 
                    WHERE ((yandex_address_str LIKE :text OR address LIKE :text) OR 
                          (yandex_address_str LIKE :text_trslt OR address LIKE :text_trslt) OR 
                          (yandex_address_str LIKE :text_crrct OR address LIKE :text_crrct)) AND
                          deleted = 0 AND
                          result = 5 AND
                          onsite = 1
                          LIMIT 5)';
        $sql .= ' UNION ';
        $sql .= '(SELECT id, id as name, id as value_name, "id" as type, "ID" as title, "" as join_id, "" as color 
                  FROM c_industry ci 
                  WHERE
                          deleted = 0 AND
                          result = 5 AND
                          onsite = 1 AND
                          id = :text_int)';

        $query = $this->getEntityManager()->getConnection()->prepare($sql);
        $query->bindValue("text_int", $text);
        $query->bindValue("label", "<label>");
        $query->bindValue("label2", "</label>");
        $query->bindValue("text_int", $text);
        $query->bindValue("text", '%'.$text.'%');
        $query->bindValue("text_trslt", '%'.$text_trslt.'%');
        $query->bindValue("text_crrct", '%'.$text_crrct.'%');
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }
}