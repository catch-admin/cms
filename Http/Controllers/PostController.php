<?php
declare(strict_types=1);

namespace Modules\Cms\Http\Controllers;

use Catch\Base\CatchController as Controller;
use Modules\Cms\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function __construct(
        protected readonly Post $model
    ){}

    /**
     * @return mixed
     */
    public function index(): mixed
    {
        return $this->model->getList();
    }

    public function store(Request $request)
    {
        return $this->model->storeBy($request->all());
    }

    public function show($id)
    {
        $post = $this->model->firstBy($id);

        $post->tags = $post->tags()->get()->pluck('name');

        return $post;
    }

    public function update($id, Request $request)
    {
       if($this->model->updateBy($id, $request->all())) {
           $this->model->savePostTags($this->model->firstBy($id));
       }

       return true;
    }

    /**
     * 删除
     * @param $id
     * @return bool
     */
    public function destroy($id): bool
    {
        return $this->model->deletesBy($id);
    }

    /**
     * enable
     *
     * @param $id
     * @return bool
     */
    public function enable($id): bool
    {
        return $this->model->togglesBy($id);
    }
}
