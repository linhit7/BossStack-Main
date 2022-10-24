<?php

namespace RBooks\Services;

use RBooks\Repositories\CareerRepository;
use \Auth;
use \DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use RBooks\Models\Career;

class CareerService extends BaseService
{
    /**
     * Construct function
     */
    public function __construct()
    {
        $this->repository = app(CareerRepository::class);
    }

    public function create($request)
    {

    }

    public function update($request, $id)
    {

    }

        

}
