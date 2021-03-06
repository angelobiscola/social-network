<?php

namespace App\Application\Web\User\Http\Controllers\Comment;

use App\Application\Web\User\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Domains\Comment\Comments;

class CommentController extends BaseController
{

    public function index()
    {
        return 'Get_Index';
    }

    public function create()
    {
        return 'Get_Create';
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        return 'Get_Show '.$id;
    }

    public function edit($id)
    {
        return 'Get_Edit '.$id;
    }

    public function update(Request $request, $id)
    {

    }

    public function delete($id)
    {
        return 'Get_delete '.$id;
    }

}

