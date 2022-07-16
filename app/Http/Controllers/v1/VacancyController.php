<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Vacancy::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Vacancy::where('id', $id)->first();
    }

    
    public function show_vacan_company($id)
    {
        return Vacancy::where('company_id', $id)->get();
    }

    public function show_top_ten()
    {
        return Vacancy::orderBy('salary', 'desc')->get();
    }
    

    /**
     * Search by a name
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function search($name)
    {
        return Product::where('name', 'like', '%'.$name.'%')->get();
    }

}
