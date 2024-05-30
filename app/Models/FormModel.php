<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SalaryModel;

class FormModel extends Model
{
    use CrudTrait;
    use HasFactory;

    public function salary()
    {
        return $this->hasOne(SalaryModel::class, 'id', 'salary_id')->withDefault();
    }
}
