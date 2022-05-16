<?php

// Category
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

class Category
{
    private $id;
    private $name;
    private $description;
    private $articles;

    public function __construct($id, $name, $description, $articles = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;

        // if ($articles) {
        //     $this->articles = $articles;
        // } else {
        //     $this->articles = [];
        // }

        // fait la même chose que la ligne 30
        // $this->articles = $articles ? $articles : [];

        // fait la même chose que la ligne 37
        $this->articles = $articles ?? [];
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of articles
     */ 
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Set the value of articles
     *
     * @return  self
     */ 
    public function setArticles($articles)
    {
        $this->articles = $articles;

        return $this;
    }

    public function addArticle($article)
    {
        if (!in_array($article, $this->articles)) {
            $this->articles[] = $article;
        }

        return $this;
    }

    public function removeArticle($article)
    {
        $index = array_search($article, $this->articles);

        if ($index !== false) {
            array_splice($this->articles, $index, 1);
        }

        return $this;
    }
}
