<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       // return parent::toArray($request);
       return [
        'id'=>$this->id,
        'name'=>$this->name,
        'type'=>$this->type,
        'email'=>$this->email,
        'address'=>$this->address,
        'city'=>$this->city,
        'state'=>$this->state,
        ];

    }
}

//  'name'=>$name,
//             'type'=>$type,
//             'email'=>$this->faker->email(),
//             'address'=>$this->faker->streetAddress(),
//             'city'=>$this->faker->city(),
//             'state'=>$this->faker->state(),