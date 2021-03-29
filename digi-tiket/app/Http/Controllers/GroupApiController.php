<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupApiController extends Controller
{
    function index()
    {
        $group_ = Group::all();
        return response()->json($group_);
    }

    function save(Request $req)
    {
        $Group = new Group;
        $Group ->id_group= $req->id_group;
        $Group ->stud_name= $req->stud_name;
        $Group ->YEAR= $req->YEAR;
        $Group ->nim_1= $req->nim_1;
        $Group ->name_1= $req->name_1;
        $Group ->nim_2= $req->nim_2;
        $Group ->name_2= $req->name_2;
        $Group ->nim_3= $req->nim_3;
        $Group ->name_3= $req->name_3;
        $Group ->save();
        
        return response()->json([
            'status' => 'ok',
            'data' => $Group,
            'message' => 'Data was created!'
        ], 201);
    }

    function update(Request $req, $id)
    {
        $group=Group::find($id);
        $group->update($req->all());

        return response()->json([
            'status' => 'ok',
            'data' => $group,
            'message' => 'Data was updated'
        ], 200);
    }

    function delete($id)
    {
        $groups=Group::Find($id);
        $groups->delete();

        return response()->json([
            'status' => 'ok',
            'data' => $groups,
            'message' => 'Data was deleted'
        ], 200);
    }
}
