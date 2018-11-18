<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
   protected $table = 'clients';
   protected $primaryKey = 'id_client';
   protected $fillable = [
       'id_client','has_user','email'];
       public function file(){
             return $this->belongsTo('App\file');
}
}
