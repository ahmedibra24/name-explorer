<?php 
// all functions related to names table
declare(strict_types=1);
function fetch_names_by_initial(string $char,int $page = 1, int $perPage = 15): array{
  global $pdo ;
  $stmt =$pdo->prepare('SELECT DISTINCT `name` FROM `names` WHERE `name` LIKE :expr ORDER BY `name` ASC LIMIT :limit OFFSET :offset');
  $stmt->bindValue(':expr',"{$char}%");
  $stmt->bindValue(':limit',$perPage,PDO::PARAM_INT);
  $stmt->bindValue(':offset',($page - 1)*$perPage,PDO::PARAM_INT);
  $stmt->execute();
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $names = [];
  foreach($results as $result){
      $names[] = $result['name'];
  }
  return $names;
};

function count_names_by_initial(string $char):int{
    global $pdo;

    $stmt = $pdo->prepare('SELECT COUNT(DISTINCT `name`)AS `count` FROM `names` WHERE `name` LIKE :expr');
    $stmt->bindValue(':expr',"{$char}%");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result['count'];

}

function fetch_name_entries(string $name) : array{
    global $pdo ;
    $stmt = $pdo-> prepare('SELECT `year`, `count`  FROM `names` WHERE `name` = :name ORDER BY `year`ASC');
    $stmt->bindValue(':name',$name);
    $stmt->execute();
    $results = $stmt-> fetchAll(PDO::FETCH_ASSOC);

    return $results;

}

function most_common_names(): array {
    global $pdo ;
    $stmt = $pdo-> prepare('SELECT `name`, SUM(`count`) AS `sum`  FROM `names` GROUP BY  `name`  ORDER BY `sum` DESC LIMIT 10');
    $stmt->execute();
    $results = $stmt-> fetchAll(PDO::FETCH_ASSOC);

    return $results;

}
