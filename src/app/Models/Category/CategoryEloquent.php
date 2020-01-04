<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;
use App\Services\Scopes\IsShow;

class CategoryEloquent extends Model
{
    use IsShow;

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * 割り当て可能な属性
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * 属性に対するモデルのデフォルト値
     *
     * @var array
     */
    protected $attributes = [];
}
