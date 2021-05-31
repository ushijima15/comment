<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'is_admin' => $this->is_admin,
            'is_time_editor' => isset($this->employee) ? $this->employee->is_time_editor : false,
            'employee_id' => isset($this->employee) ? $this->employee->id : null,
            'employee' => $this->employee,
        ];
    }
}
