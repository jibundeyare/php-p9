<?php

use App\Blog\Article;
use App\Blog\Category;
use App\Blog\Tag;

require __DIR__.'/vendor/autoload.php';

$categories = [
    new Category(1, 'Foo', null),
    new Category(2, 'Bar', null),
    new Category(3, 'Baz', null),
];
dump($categories);

$tags = [
    new Tag(1, 'HTML', null),
    new Tag(2, 'CSS', null),
    new Tag(3, 'JS', null),
];
dump($tags);

$articles = [
    new Article(1, 'Lorem', 'Lorem lorem', $categories[0], [$tags[0], $tags[1]]),
    new Article(2, 'Ipsum', 'Ipsum ipsum', $categories[1], [$tags[0], $tags[2]]),
    new Article(3, 'Sit', 'Sit sit', $categories[1], [$tags[2]]),
];
dump($articles);

foreach ($articles as $article) {
    echo "title: {$article->getTitle()}";
    echo '<br>';

    // echo "category: {$article->getCategory()->getName()}";
    // echo '<br>';

    // fait la même chose que la ligne 24
    $category = $article->getCategory();
    echo "category: {$category->getName()}";
    echo '<br>';

    foreach ($article->getTags() as $tag) {
        echo "tag: {$tag->getName()}";
        echo '<br>';
    }

    foreach ($category->getArticles() as $article) {
        echo "same category title: {$article->getTitle()}";
        echo '<br>';
    }
}
