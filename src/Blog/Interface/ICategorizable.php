<?php declare(strict_types = 1);

namespace App\Blog\Interface;

use App\Blog\Category;

interface ICategorizable
{
    public function getCategory(): Category;
    public function setCategory(Category $category): self;
}