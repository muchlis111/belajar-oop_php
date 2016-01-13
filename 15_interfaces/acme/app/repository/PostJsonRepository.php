<?php

namespace acme\app\repositories;

use stdClass;

/**
 * the post repository that fetches posts from a json file
 */
class PostJsonRepository implements PostRepositoryInterface {
    protected  $posts = array ();

    /**
     * config
     */
    public function  __construct()
    {
        $post = json_decode(file_get_contents(dirname(__FILE__) . '/posts.json'), true);
        foreach ($posts as $key => $post) {
        $this->posts[$key] = (object) $post;
    }
}
    /**
     * @see \acme\app\repositories\PostRepositoryInterface::All()
     */
   public function  All()
   {
       return $this->posts;
   }
    /**
     * @see \acme\app\Repositories\PostRepositoryInterface::find()
     */
    public function  Find($id)
    {
        return isset($this->posts[$id]) : new stdClass;
    }
}