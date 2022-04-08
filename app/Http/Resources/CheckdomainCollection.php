<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CheckdomainCollection extends ResourceCollection
{



    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        return [
            'data' => $this->collection,
            'muldomain' => $request->muldomain,
            'links' => [
                'self' => 'link-value',
            ],
        ];

    }
}
