<?php

namespace RBooks\Repositories;

use RBooks\Models\Blog;

class BlogRepository extends BaseRepository
{
    protected $fieldSearchable = [

    ];

    protected $modelName = Blog::class;
}
