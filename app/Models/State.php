<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasRelationships;
    use HasFactory;


    public function citizens()
    {
        return $this->hasManyDeep('App\Models\Citizen', ['App\Models\Lga', 'App\Models\Ward']);
    }

    public function lgas()
    {
        return $this->hasMany(Lga::class);
    }
}
