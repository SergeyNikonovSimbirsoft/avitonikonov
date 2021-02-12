<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function subcategory() {
        return $this->hasMany(Category::class, 'parent_category_id');
    }
    public function parentCategory() {
        return $this->belongsTo(Category::class, 'parent_category_id');
    }

    public function getParents() {
        $parents = collect([]);
        if($this->parentCategory) {
            $parent = $this->parentCategory;
            while(!is_null($parent)) {
                $parents->prepend($parent);
                $parent = $parent->parentCategory;
            }
        }
        return $parents;
    }
}
