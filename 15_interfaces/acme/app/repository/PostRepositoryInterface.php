<?php

namespace acme\app\repositories;
/**
 * the contract for all post repositories. they must all use the emthods defined in this interface.
 */

interface PostRepositoryInterface {
    /**
     * return all post, as an array of objects
     * $post->title
     * $post->body
     *
     * @return array
     */
    public  function  All();
    /**
     * return a single post
     * $post->title
     * $post->body
     *
     * @param integer $id
     * @return object
     */
    public function Finf($id);
}

