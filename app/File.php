<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
   protected $table = 'files';
   protected $primaryKey = 'id_file';
   protected $fillable = [
       'id_file','has_file','name','size','path','description','id_client'];
   public function client(){
       return $this->hasOne('App\client','id_client','id_client');
}
}
