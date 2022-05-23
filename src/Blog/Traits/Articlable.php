<?php declare(strict_types = 1);

namespace App\Blog\Traits;

use App\Blog\Article;

trait Articlable
{
    private $articles;

    /**
     * Get the value of articles
     */ 
    public function getArticles(): array
    {
        return $this->articles;
    }

    /**
     * Set the value of articles
     *
     * @return  self
     */ 
    public function setArticles(array $articles): self
    {
        $this->articles = $articles;

        return $this;
    }

    public function addArticle(Article $article): self
    {
        if (!in_array($article, $this->articles)) {
            $this->articles[] = $article;
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        $index = array_search($article, $this->articles);

        if ($index !== false) {
            array_splice($this->articles, $index, 1);
        }

        return $this;
    }
}