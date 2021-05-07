<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\Person\Create;
use App\Http\Requests\Api\Person\Update;
use App\Models\Person;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PersonsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Person::orderBy('name')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Api\Person\Create  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request)
    {
        $data = $request->all();

        DB::beginTransaction();

        try {
            $item = Person::create($data);
        } catch (\Exception $e) {
            DB::rollback();
            
            return response()->json([
                'message' => 'Não foi possível salvar os dados'
            ], 422);
        }

        DB::commit();

        return $item;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $item = Person::findOrFail($id);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Não foi possível encontrar este dado'
            ], 422);
        }

        return $item;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Api\Person\Update  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request, $id)
    {
        $data = $request->all();

        DB::beginTransaction();
        
        try {
            $item =  Person::findOrFail($id);
            $item->update($data);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'message' => 'Não foi possível atualizar os dados'
            ], 422);
        }

        DB::commit();

        return $item;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        DB::beginTransaction();
        
        try {
            $item = Person::findOrFail($id);
            $item->delete();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'message' => 'Não foi possível excluir os dados'
            ], 422);
        }

        DB::commit();

        return $item;
    }
}
