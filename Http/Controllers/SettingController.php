<?php
declare(strict_types=1);

namespace Modules\Cms\Http\Controllers;

use Catch\Base\CatchController as Controller;
use Modules\Cms\Models\Option;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(Request $request)
    {
        return Option::getValues($request->get('key', '*'));
    }

    public function store(Request $request)
    {
        $optionKeys = Option::pluck('key');

        foreach ($request->all() as $key => $value) {
            if ($optionKeys->contains($key)) {
                Option::where('key', $key)->update([
                    'value' => $value,
                    'creator_id' => $this->getLoginUserId()
                ]);
            } else {
                app(Option::class)->storeBy([
                    'key' => $key,
                    'value' => $value,
                    'creator_id' => $this->getLoginUserId()
                ]);
            }
        }
    }
}
