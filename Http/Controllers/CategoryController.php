<?php
declare(strict_types=1);

namespace Modules\Cms\Http\Controllers;

use Catch\Base\CatchController as Controller;
use Catch\Exceptions\FailedException;
use Modules\Cms\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function __construct(
        protected readonly Category $model
    ){}

    /**
     * @return mixed
     */
    public function index(): mixed
    {
        $categories =  $this->model->getList();

        $transfer = function($categories, $url = '/') use (&$transfer){
            if (! count($categories)) {
                return [];
            }

            foreach ($categories as $category) {
                $category->url =  $url . $category->slug;
                if (isset($category['children']) && count($category['children'])) {
                    $transfer($category['children'], $category->url . '/');
                }
            }

            return $categories;
        };

        return $transfer($categories);
    }

    /**
     * store
     *
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request): mixed
    {
        if ($this->model->where('slug', $request->get('slug'))->first()) {
            throw new FailedException('分类别名已存在, 请重新设置');
        }

        return $this->model->storeBy($request->all());
    }

    /**
     * show
     *
     * @param $id
     * @return mixed
     */
    public function show($id): mixed
    {
        return $this->model->firstBy($id);
    }

    /**
     *
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function update($id, Request $request): mixed
    {
        if ($this->model->where('slug', $request->get('slug'))
                ->where('id', '<>', $id)->first()) {
            throw new FailedException('分类别名已存在, 请重新设置');
        }

        return $this->model->updateBy($id, $request->all());
    }

    /**
     *
     * @param $id
     * @return bool|null
     */
    public function destroy($id): ?bool
    {
        return $this->model->deleteBy($id);
    }


    protected function transfer()
    {

    }
}
