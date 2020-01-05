<?php

namespace App\Models\Memo;

use Illuminate\Database\Eloquent\Model;
use App\Services\Scopes\IsShow;

class MemoEloquent extends Model
{
    use IsShow;

    /**
     * 形式の定数
     *
     * @var array
     */
    const TYPES = [
        [
            'name' => 'マークダウン',
            'code' => 'md'
        ],
        [
            'name' => 'スニペット',
            'code' => 'sn'
        ]
    ];

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'memos';

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

    /**
     * 多対多 カテゴリ
     */
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category\CategoryEloquent', 'memo_category', 'memo_id', 'category_id');
    }
}
