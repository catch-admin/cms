<?php
declare(strict_types=1);

namespace Modules\Cms\Http\Controllers;

use Catch\Base\CatchController as Controller;
use Modules\Cms\Models\PostHasTags;
use Modules\Cms\Models\Tag;
use Illuminate\Http\Request;


class TagController extends Controller
{
    public function __construct(
        protected readonly Tag $model
    ){}

    /**
     * @param Request $request
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
        return $this->model->firstBy($id);
    }

    public function update($id, Request $request)
    {
        return $this->model->updateBy($id, $request->all());
    }

    public function destroy($id)
    {
        return $this->model->deletesBy($id, callback: function ($ids){
            foreach ($ids as $id) {
                PostHasTags::where('tag_id', $id)->delete();
            }
        });
    }
}
