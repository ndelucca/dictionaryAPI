<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DictionaryWord extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'word' => $this->word,
            'wordtype' => $this->wordtype,
            'definition' => $this->definition
        ];
    }

    public function with($request)
    {
        return [
            'version' => '1.0.0',
            'author' => 'ndeluccapps@gmail.com'
        ];
    }
}
