<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ActivitiesRepositoryRepository;
use App\Entities\ActivitiesRepository;
use App\Validators\ActivitiesRepositoryValidator;

/**
 * Class ActivitiesRepositoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ActivitiesRepositoryRepositoryEloquent extends BaseRepository implements ActivitiesRepositoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return "App\\Activities";
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
