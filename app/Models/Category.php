<?php

namespace App\Models;


class Category extends BaseModel
{
    public $timestamps = false;
    protected $table = 'categories';


    const TYPE_NEW = 1;
    const TYPE_PRODUCT = 2;
    const TYPE_STATIC = 3;
    const TYPE_TAG = 4;

    function parent(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Category::class, 'id', 'parent_id');
    }

    function product(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->HasMany(ProductModel::class, 'category_id', 'id');
    }

    public function getTypeAttribute()
    {
        if (isset($this->attributes['type']) && $this->attributes['type']) {
            return $this->getType($this->attributes['type'], true);
        }
    }

    static function get_type_new(): int
    {
        return self::TYPE_NEW;
    }

    static function get_type_product(): int
    {
        return self::TYPE_PRODUCT;
    }

    static function get_type_static_page(): int
    {
        return self::TYPE_STATIC;
    }

    static function get_type_tag(): int
    {
        return self::TYPE_TAG;
    }

    static function listType($groupAction = true): array
    {
        return [
            self::get_type_new() => [
                'id' => self::get_type_new(),
                'style' => 'success',
                'icon' => 'ri-checkbox-circle-line',
                'name' => 'Tin tức',
            ],
            self::get_type_product() => [
                'id' => self::get_type_product(),
                'style' => 'secondary',
                'icon' => 'ri-alert-fill',
                'name' => 'Sản phẩm',
            ],
            self::get_type_static_page() => [
                'id' => self::get_type_static_page(),
                'style' => 'secondary',
                'icon' => 'ri-alert-fill',
                'name' => 'Trang tĩnh',
            ],
            self::get_type_tag() => [
                'id' => self::get_type_tag(),
                'style' => 'secondary',
                'icon' => 'ri-alert-fill',
                'name' => 'Tags',
            ],
        ];
    }

    static function getType($selected = false, $return = false, $groupAction = true): array
    {
        $listType = self::listType($groupAction);
        if ($selected !== false && isset($listType[$selected])) {
            $listType[$selected]['checked'] = 'checked';
            if ($return) {
                return $listType[$selected];
            }
        }

        if ($return) {
            return [
                'id' => -13, 'style' => 'danger',
                'icon' => 'mdi mdi-trash-can-outline',
                'name' => '---',
                'actions' => []
            ];
        }
        return $listType;
    }

    function scopeTypeProduct($query) {
        return $query->where('type', self::get_type_product());
    }
}