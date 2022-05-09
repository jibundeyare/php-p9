<?php

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

class Article
{
    private $id;
    private $title;
    private $body;
    private $category;

    public function __construct($id, $title, $body, $category)
    {
        $this->id = $id;
        $this->title = $title;
        $this->body = $body;
        $this->category = $category;
    }
}
