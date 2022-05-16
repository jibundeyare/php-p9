<?php

namespace App\Todo;

class Task
{
    private $id;
    private $title;
    private $limitDate;
    private $status;
    // private $responsible;

    public function __construct($id, $title, $limitDate, $status)
    {
        $this->id = $id;
        $this->title = $title;
        $this->limitDate = $limitDate;
        $this->status = $status;
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
}