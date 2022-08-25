<?php

namespace Modules\Tax\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Helpers\HasAmount;

class Tax extends Model
{
    use HasFactory, HasAmount;

    protected $guarded = ['id'];

    protected static function newFactory()
    {
        return \Modules\Tax\Database\factories\TaxFactory::new();
    }
}
