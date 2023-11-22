<?php

namespace App\Models;

use JetBrains\PhpStorm\Pure;

class Banner extends BaseModel
{
    protected $table = 'banner';
    public $timestamps = false;

    const TYPE_CENTER = 1;
    const TYPE_LEFT = 2;

    static function get_type_center(): int
    {
        return self::TYPE_CENTER;
    }

    static function get_type_left(): int
    {
        return self::TYPE_LEFT;
    }

    public function getTypeAttribute()
    {
        if (isset($this->attributes['type']) && $this->attributes['type']) {
            return $this->getType($this->attributes['type'], true);
        }
    }

    static function listType($groupAction = true): array
    {
        return [
            self::get_type_center() => [
                'id' => self::get_type_center(),
                'style' => 'success',
                'icon' => 'ri-checkbox-circle-line',
                'name' => 'Banner chính',
            ],
            self::get_type_left() => [
                'id' => self::get_type_left(),
                'style' => 'secondary',
                'icon' => 'ri-alert-fill',
                'name' => 'Banner phụ',
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
}