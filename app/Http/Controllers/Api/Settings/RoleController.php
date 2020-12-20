<?php


namespace App\Http\Controllers\Api\Settings;


use App\Http\Controllers\Controller;
use App\Http\Requests\Api\RoleFormRequest;
use App\Http\Resources\Api\RoleResource;
use App\Models\Role;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class RoleController extends Controller
{

    /**
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $roles = Role::all();
        return RoleResource::collection($roles);

    }

    /**
     * @param RoleFormRequest $request
     * @return JsonResponse
     */
    public function create(RoleFormRequest $request) {

        //$result = Role::create($request->all());

        dd($request->input('display_name'),$request->input('description'),$request->input('name'));
        exit();

        if($result)
            return response()->json(['success' => 'The new role is added']);

        return response()->json(['error' => 'Role does not created']);
    }

    public function update() {
    }

    public function destroy() {
    }

}
