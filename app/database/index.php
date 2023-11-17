<?php


include 'conn.php';

$sql = "SELECT category.name,sub_category.name  FROM category,sub_category
 WHERE category.id=sub_category.category_id  ";


$sql = $conn->prepare($sql);
$sql->execute();

$prod = $sql->fetchAll();

echo '<pre>';
print_r($prod);
echo '</pre>';
//category.name ,sub_category.name

?>