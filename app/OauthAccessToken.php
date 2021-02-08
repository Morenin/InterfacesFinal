<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use HasApiTokens;

class OauthAccessToken extends Model
{
    public function AauthAcessToken(){
        return $this->hasMany('\App\OauthAccessToken');
    }
}
