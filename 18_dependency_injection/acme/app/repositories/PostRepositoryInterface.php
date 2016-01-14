<?php
namespace acme\app\repositories;

/**
 * the contract for all post repositories. they must all us the emthod defined in this interfaces
 */
interface PostRepositoryInterface {

    /**
     * return all posts, as an array of object
     * $post->title
     * $post->body
     *
     * @return array
     */
    public function  all ();
    /**
     * return a single post
     * $post->title
     * $post-body
     *
     * @param integer $id
     * @return object
     */
    public  function  Find($id);
}