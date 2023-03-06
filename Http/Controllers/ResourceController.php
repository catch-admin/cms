<?php
declare(strict_types=1);

namespace Modules\Cms\Http\Controllers;

use Catch\Base\CatchController as Controller;
use Modules\Cms\Models\Resource;
use Illuminate\Http\Request;


class ResourceController extends Controller
{
    public function __construct(
        protected readonly Resource $model
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
        return $this->model->firstBy($id);
    }

    public function update($id, Request $request)
    {
        return $this->model->updateBy($id, $request->all());
    }

    public function destroy($id)
    {
        return $this->model->deleteBy($id);
    }

    public function enable($id): bool|int
    {
        return $this->model->toggleBy($id, 'is_visible');
    }
}
