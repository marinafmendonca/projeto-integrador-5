<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;


class Usuario extends Model implements Authenticatable
{
  use \Illuminate\Auth\Authenticatable;
  protected $table = 'usuarios';
  protected $primaryKey = 'usuario_id';
}
