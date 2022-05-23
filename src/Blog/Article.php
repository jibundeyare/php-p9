<?php declare(strict_types = 1);

// Article
// - id
// - title
// - summary
// - body
// - author
// - category
// - tags
// - image
// - published_at
// - created_at
// - created_by
// - edited_at
// - edited_by
// - deleted_at
// - deleted_by

namespace App\Blog;

use App\Blog\Category;
use App\Blog\Traits\Categorizable;
use App\Blog\Traits\Taggable;

class Article
{
    use Categorizable;
    use Taggable;

    private $id;
    private $title;
    private $body;

    public function __construct(int $id, string $title, string $body, Category $category, array $tags = [])
    {
        $this->id = $id;
        $this->title = $title;
        $this->body = $body;
        $this->setCategory($category);
        $this->setTags($tags);
    }

    /**
     * Get the value of id
     */ 
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of body
     */ 
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * Set the value of body
     *
     * @return  self
     */ 
    public function setBody(string $body): self
    {
        $this->body = $body;

        return $this;
    }
}
