<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/Blog/Category.php';
require __DIR__.'/Blog/Article.php';

$categories = [
    new Category(1, 'Foo', null),
    new Category(2, 'Bar', null),
    new Category(3, 'Baz', null),
];
dump($categories);

$articles = [
    new Article(1, 'Lorem', 'Lorem lorem', $categories[0]),
    new Article(2, 'Ipsum', 'Ipsum ipsum', $categories[1]),
    new Article(3, 'Sit', 'Sit sit', $categories[1]),
];
dump($articles);

foreach ($articles as $article) {
    echo $article->title;
    echo '<br>';
    echo $article->category->getName();
    echo '<br>';
}
