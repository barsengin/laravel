<?php

namespace App\Http\Resources\Api;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Role
 *
 * @extends JsonResource<ActivityLog>
 */
class RoleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'role_name'   => $this->role_name,
            'role_description' => $this->role_description,
        ];
    }
}
