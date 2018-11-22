<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\FormExampleRequest;

class FormController extends Controller
{
    public function checkValidation(FormExampleRequest $request)
    {
        $success = "Dữ liệu được xác thực thành công";

        return view('welcome', compact('success'));
    }
}
