<?php
  namespace Models;

  abstract class Model {
    public $id;
    public $createdAt;
    public $updatedAt;

    abstract public static function findByPk($con, $id);
    abstract public static function create($con, $form);
  }
?>