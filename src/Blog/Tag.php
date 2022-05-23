<?php declare(strict_types = 1);

// Tag
// - id
// - name / titre
// - description
// - image
// - created_at
// - created_by
// - edited_at
// - edited_by
// - deleted_at
// - deleted_by

namespace App\Blog;

use App\Blog\ANamedObject;
use App\Blog\Traits\Articlable;

class Tag extends ANamedObject
{
    use Articlable;

    public function __construct(int $id, string $name, ?string $description, array $articles = [])
    {
        parent::__construct($id, $name, $description);
        $this->articles = $articles;
    }
}
