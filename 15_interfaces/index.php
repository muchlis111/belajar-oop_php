<?php
// require psr-0 autoloader
require 'autoload.php';

//work with the RSS implementation of postreposiroryInterface
$postRepository = new acme\app\repositories\PostRssRepository();
$posts = $postRepository-> All();
echo '<ul>';
foreach ($posts as $post) {
    echo '<li>' . $post->title . '</li>';
}
echo '</ul>';

$post = $postRepository->FInd(2);
echo '<h1>' . $post->title . '</h1>';
echo '<p>'  . $post->body . '</p>';

//work with the json implementation of postRepositoryInterface
$posts = $postRepository->All();
echo '<ul>';
foreach ($posts as $post) {
    echo '</l1>' . $post->title . '</li>'
        }
echo '</ul>';

$post = $postRepository->find(2);
echo '<h1>' . $post->title, '<h1>';
echo '<p>' . $post->body . '</p>';
