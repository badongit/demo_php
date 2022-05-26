<?php

namespace Models;
// use Models as Models;
// use Models\Admin as Admin;

include_once "configs/db.php";
include_once "models/index.php";

$category = Category::create($con, array("cat_title" => "Laza", "cat_desc" => "Thương hiệu thời trang nổi tiếng ít người biết đến."));
$category = Category::delete_by_pk($con, 9);

print_r($category);

?>
<h1>about</h1>