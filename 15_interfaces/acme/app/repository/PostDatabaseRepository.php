<?php
namespace acme\app\repositories;

/**
 * the post repository that fetches posts from a database
 */
class PostDatabaseRepository implements PostRepositoryInterface
{
    protected $db;

    public function  __construct()
    {
        //store database connection
    }
    /**
     * @see \acme\app\repositories\PostDatabaseRepository ::All()
     */
    public function  All()
    {
        //fetch All posts from db
    }
    /**
     * @see \acme\app\repositories\PostDatabaseRepository ::find()
     */
    public function  find($id)
    {
        // fetsh a single post from db
    }

}