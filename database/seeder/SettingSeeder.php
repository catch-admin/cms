<?php

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Cms\Models\Option;

return new class extends Seeder
{
    /**
     * Run the seeder.
     *
     * @return void
     */
    public function run(): void
    {
        foreach ($this->defaultOptions() as $k => $value) {
            if (! Option::where('key', $k)->first()) {
                Option::insert([
                    'key' => $k,
                    'value' => $value,
                    'created_at' => time(),
                    'updated_at' => time()
                ]);
            }

        }
    }


    protected function defaultOptions(): array
    {
        return [
            'site_date_format' => '年-月-日',
            'site_time_format' => 'H:i',
            'site_comment_need_email' => 1,
            'site_comment_order_desc' => 1,
            'site_comment_check' => 1,
            'site_comment_limit' => 0,
            'site_comment_per_page' => 10,
            'site_comment_avatar' => 'identicon',
            'site_homepage_show' => 1,
            'site_comment_avatar_proxy' => 'https://gravatar.loli.net',
            'site_most_article_number' => 10,

            'site_category_types' => json_encode([
                ['name' => '文章', 'value' => 1, 'template' => 'post', 'is_default' => true],
                ['name' => '链接', 'value' => 2, 'template' => null, 'is_default' => true]
            ], JSON_UNESCAPED_UNICODE),

            'site_url_struct' => 3,

            'is_simple_url' => 2,
        ];
    }

};
