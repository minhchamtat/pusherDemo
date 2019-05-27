<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Post;

class PostsTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Post $post)
    {
        return [
            'id' => $post->id,
            'user_id' => [
                'name' => $post->user->name,
            ],
            'content' => $post->content,
        ];
    }
}
