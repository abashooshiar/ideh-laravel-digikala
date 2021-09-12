<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'category';
    protected $fillable = ['name', 'ename', 'parent_id', 'url', 'search_url', 'img', 'notShow'];

    public static function get_parent()
    {
        $array = [0 => 'Hauptkategorie '];
        $list = self::with('getChild.getChild')->where('parent_id', 0)->get();
        foreach ($list as $key => $value) {
            $array[$value->id] = $value->name;
            foreach ($value->getChild as $key2 => $value2) {
                $array[$value2->id] = '+' . $value2->name;
                foreach ($value2->getChild as $key3 => $value3) {
                    $array[$value3->id] = '*' . $value3->name;

                }
            }

        }
        return $array;
    }

    public function getChild()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function getParent()
    {
        return $this->hasOne(Category::class, 'id', 'parent_id')->withTrashed()->withDefault(['name' => '-']);
    }

    public static function getData($request)
    {
        $string = '?';
        $category = self::with('getParent');
        if(inTrashed($request)) {
            $category = $category->onlyTrashed();
            $string = create_paginate_url($string,'trashed=true');
        }
        $category = $category->orderBy('id', 'DESC')->paginate(6);
        $category->withPath($string);
        return $category;
    }
}
