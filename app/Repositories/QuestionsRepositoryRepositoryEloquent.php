<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\QuestionsRepositoryRepository;
use App\Entities\QuestionsRepository;
use App\Validators\QuestionsRepositoryValidator;

/**
 * Class QuestionsRepositoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class QuestionsRepositoryRepositoryEloquent extends BaseRepository implements QuestionsRepositoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return "App\\Questions";
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
