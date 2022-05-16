<?php

namespace App\Todo;

class Task
{
    private $id;
    private $title;
    private $limitDate;
    private $status;
    // private $responsible;
    private $tags;

    public function __construct($id, $title, $limitDate, $status, $tags = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->limitDate = $limitDate;
        $this->status = $status;
        $this->tags = $tags ?? [];
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of limitDate
     */ 
    public function getLimitDate()
    {
        return $this->limitDate;
    }

    /**
     * Set the value of limitDate
     *
     * @return  self
     */ 
    public function setLimitDate($limitDate)
    {
        $this->limitDate = $limitDate;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of tags
     */ 
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set the value of tags
     *
     * @return  self
     */ 
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    public function addTag($tag)
    {
        // si le tag n'est pas déjà présent dans la liste, on l'ajoute à la liste
        if (!in_array($tag, $this->tags)) {
            $this->tags[] = $tag;
        }

        return $this;
    }

    public function removeTag($tag)
    {
        $index = array_search($tag, $this->tags);

        if ($index !== false) {
            // le tag a été trouvé
            // suppression du tag trouvé
            array_splice($this->tags, $index, 1);
        }

        return $this;
    }
}