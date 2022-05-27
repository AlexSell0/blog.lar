<?php

namespace App\Services\Post;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($data){
        try {
            DB::beginTransaction();

            $data['preview_image'] = 'storage/' . (Storage::disk('public')->put('/images', $data['preview_image']));
            $data['main_image'] = 'storage/' . (Storage::disk('public')->put('/images', $data['main_image']));

            if (isset($data['tags_ids'])) {
                $tags = $data['tags_ids'];
                unset($data['tags_ids']);
            }

            $post = Post::firstOrCreate(['title' => $data['title']], [
                'title' => $data['title'],
                'content' => $data['content'],
                'category_id' => $data['category_id'],
                'preview_image' => $data['preview_image'],
                'main_image' => $data['main_image'],
            ]);

            if (isset($tags)) {
                $post->tags()->attach($tags); //Обращаемся ктаблице tags и постим теги
            }
            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            abort('500');
        }
    }

    public function update($data, $posts){
        try {
            DB::beginTransaction();

            if(isset($data['preview_image'])){
                $data['preview_image'] = 'storage/' . (Storage::disk('public')->put('/images', $data['preview_image']));
            }

            if(isset($data['main_image'])){
                $data['main_image'] = 'storage/' . (Storage::disk('public')->put('/images', $data['main_image']));
            }

            if (isset($data['tags_ids'])) {
                $tags = $data['tags_ids'];
                unset($data['tags_ids']);
            }

            $posts->update($data);

            if (isset($tags)) {
                $posts->tags()->sync($tags); //Обращаемся ктаблице tags и постим теги
            }

            DB::commit();

        } catch (\Exception $ex) {
            DB::rollBack();
            abort('500');
        }

        return $posts;
    }
}
