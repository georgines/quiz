<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PerformanceRepository;
use App\Entities\Performance;
use App\Validators\PerformanceValidator;

/**
 * Class PerformanceRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PerformanceRepositoryEloquent extends BaseRepository implements PerformanceRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return "App\\Performance";
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
