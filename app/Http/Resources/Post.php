<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Post extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'detail' => $this->detail,
            'view_count' => $this->view_count
            /*'user' => [
                'id' => $this->user->id,
                'name' => $this->user->name
            ]/*,
            'category' => [
                'id' => $this->category->id,
                'name' => $this->category->name
            ]*/
            
            ];
    }
}
