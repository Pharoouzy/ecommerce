<?php


    namespace App\Repositories;

    use App\Models\Category;
    use App\Traits\UploadAble;
    use Illuminate\Http\UploadedFile;
    use App\Contracts\CategoryContract;
    use Illuminate\Database\QueryException;
    use Illuminate\Database\Eloquent\ModelNotFoundException;
    use Doctrine\Instantiator\Exception\InvalidArgumentException;

    /**
     * Class CategoryRepository
     *
     * @package \App\Repositories
     */
    class CategoryRepository extends BaseRepository implements CategoryContract {
        use UploadAble;

        public function __construct(Model $model) {

        }
    }
