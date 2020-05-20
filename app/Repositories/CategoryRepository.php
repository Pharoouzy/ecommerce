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

        /**
         * CategoryRepository constructor.
         * @param Category $model
         */
        public function __construct(Category $model) {
            parent::__construct($model);
            $this->model = $model;
        }

        /**
         * @param string $order
         * @param string $sort
         * @param array $columns
         * @return mixed
         */
        public function listCategories(string $order = 'id', string $sort = 'desc', array $columns = ['*']) {
            return $this->all($columns, $order, $sort);
        }

        /**
         * @param int $id
         * @return mixed
         * @throws ModelNotFoundException
         */
        public function findCategoryById(int $id) {
            try {
                return $this->findOneOrFail($id);

            } catch (ModelNotFoundException $e) {

                throw new ModelNotFoundException($e);
            }
        }

        /**
         * @param array $data
         * @return Category|mixed
         */
        public function createCategory(array $data) {
            try {
                $collection = collect($data);

                $image = null;

                if ($collection->has('image') && ($data['image'] instanceof  UploadedFile)) {
                    $image = $this->uploadOne($data['image'], 'categories');
                }

                $featured = $collection->has('featured') ? 1 : 0;
                $menu = $collection->has('menu') ? 1 : 0;

                $merge = $collection->merge(compact('menu', 'image', 'featured'));

                $category = new Category($merge->all());

                $category->save();

                return $category;

            } catch (QueryException $exception) {
                throw new InvalidArgumentException($exception->getMessage());
            }
        }

        /**
         * @param array $data
         * @return mixed
         */
        public function updateCategory(array $data) {
            $category = $this->findCategoryById($data['id']);

            $collection = collect($data)->except('_token');
            $image = null;

            if ($collection->has('image') && ($data['image'] instanceof  UploadedFile)) {

                if ($category->image != null) {
                    $this->deleteOne($category->image);
                }

                $image = $this->uploadOne($data['image'], 'categories');
            }

            $featured = $collection->has('featured') ? 1 : 0;
            $menu = $collection->has('menu') ? 1 : 0;

            $merge = $collection->merge(compact('menu', 'image', 'featured'));

            $category->update($merge->all());

            return $category;
        }

        /**
         * @param $id
         * @return bool|mixed
         */
        public function deleteCategory($id) {
            $category = $this->findCategoryById($id);

            if ($category->image != null) {
                $this->deleteOne($category->image);
            }

            $category->delete();

            return $category;
        }
    }
