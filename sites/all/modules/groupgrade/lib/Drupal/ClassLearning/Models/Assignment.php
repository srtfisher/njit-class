<?php
namespace Drupal\ClassLearning\Models;
use Illuminate\Database\Eloquent\Model as ModelBase,
  Drupal\ClassLearning\Exception as ModelException;

class Assignment extends ModelBase {
  protected $primaryKey = 'assignment_id';
  protected $table = 'assignment';
}