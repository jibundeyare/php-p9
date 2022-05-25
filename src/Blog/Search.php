<?php declare(strict_types = 1);

namespace App\Blog;

use App\Blog\Category;

class Search
{
    public static function hasCategory($object, Category $category): bool
    {
        if ($object->getCategory() == $category) {
            return true;
        }

        return false;
    }
}