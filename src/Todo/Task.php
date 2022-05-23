<?php

namespace App\Todo;

use DateTime;

class Task
{
    private $id;
    private $title;
    private $limitDate;
    private $done;
    private $tags;
    // private $responsible;

    public function __construct($id, $title, DateTime $limitDate, $done, $tags = [])
    {
        $this->id = $id;
        $this->title = $title;
        $this->limitDate = $limitDate;
        $this->done = $done;
        $this->tags = $tags;
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
    public function getLimitDate(): DateTime
    {
        return $this->limitDate;
    }

    /**
     * Set the value of limitDate
     *
     * @return  self
     */ 
    public function setLimitDate(DateTime $limitDate): self
    {
        $this->limitDate = $limitDate;

        return $this;
    }

    /**
     * Get the value of done
     */ 
    public function getDone()
    {
        return $this->done;
    }

    /**
     * Set the value of done
     *
     * @return  self
     */ 
    public function setDone($done)
    {
        $this->done = $done;

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
