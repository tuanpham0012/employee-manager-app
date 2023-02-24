<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployyeRequest;
use App\Http\Requests\UpdateEmployyeRequest;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $model;
    public function __construct(Employee $model)
    {
        $this->model = $model;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->all();
        $data['search'] = isset($data['search']) ? $data['search'] : '';
        $per_page = isset($data['per_page']) ? $data['per_page'] : 30;
        $entries = $this->model->with(['department', 'bank'])
                ->where('code', 'like', '%'. $data['search'] . '%')
                ->orWhere('name', 'like', '%'. $data['search'] . '%')
                ->orWhere('phone', 'like', '%'. $data['search'] . '%')
                ->orWhere('landline_phone', 'like', '%'. $data['search'] . '%');

        $total = $entries->get(['id'])->count();

        $entries = $entries->paginate($per_page);

        $data = EmployeeResource::collection($entries)->additional(['total' => $total]);
 //dd($data);
        return $data;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployyeRequest $request)
    {
        $data = $request->all();
        try {
            $data['gender'] = $data['gender_id'];
            $data['is_customer'] = isset($data['is_customer']) ? $data['is_customer'] : 0;
            $data['is_supplier'] = isset($data['is_supplier']) ? $data['is_supplier'] : 0;
            $entry = $this->model->create($data);
            $data = new EmployeeResource($entry->load(['department', 'bank']));
            return response()->json([
                'code' => 200,
                'status' => 'success',
                'data' => $data,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 422,
                'status' => 'error',
                'message' => $th->getMessage(),
            ], 422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entry = $this->model->with(['department', 'bank'])->find($id);

        if($entry){
            $data = new EmployeeResource($entry);
            return response()->json([
                'code' => 200,
                'status' => 'success',
                'data' => $data,
            ], 200);
        }else{
            return response()->json([
                'code' => 404,
                'status' => 'error',
                'message' => 'Không tìm thấy thông tin bản ghi.',
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployyeRequest $request, $id)
    {
        $entry = $this->model->with(['department', 'bank'])->find($id);

        if(!$entry){
            return response()->json([
                'code' => 404,
                'status' => 'error',
                'message' => 'Không tìm thấy thông tin bản ghi.',
            ], 404);
        }
        $data = $request->all();
        try {
            $data['gender'] = $data['gender_id'];
            $data['is_customer'] = isset($data['is_customer']) ? $data['is_customer'] : 0;
            $data['is_supplier'] = isset($data['is_supplier']) ? $data['is_supplier'] : 0;
            $entry->update($data);
            $entry = $entry->fresh();
            $data = new EmployeeResource($entry->load(['department', 'bank']));
            return response()->json([
                'code' => 200,
                'status' => 'success',
                'data' => $data,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 422,
                'status' => 'error',
                'message' => $th->getMessage(),
            ], 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $data = $request->all();
        if($id == 0){
            if(isset($data['ids'])){
                $entries = $this->model->find($data['ids']);
                if($entries->count() > 0){
                    try {
                        foreach($entries as $i){
                            $i->delete();
                        }

                    return response()->json([
                        'code' => 200,
                        'status' => 'success',
                        'message' => "Xóa bản ghi thành công.",
                    ], 200);
                    } catch (\Throwable $th) {
                        return response()->json([
                            'code' => 422,
                            'status' => 'error',
                            'message' => $th->getMessage(),
                        ], 422);
                    }
                }

            }
            return response()->json([
                'code' => 422,
                'status' => 'error',
                'message' => 'Có lỗi xảy ra! id không hợp lệ.',
            ], 422);
        }
        $entry = $this->model->find($id);

        if(!$entry){
            return response()->json([
                'code' => 404,
                'status' => 'error',
                'message' => 'Không tìm thấy thông tin bản ghi.',
            ], 404);
        }

        try {
            $entry->delete();
            return response()->json([
                'code' => 200,
                'status' => 'success',
                'message' => "Xóa bản ghi thành công.",
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 422,
                'status' => 'error',
                'message' => $th->getMessage(),
            ], 422);
        }

    }

    public function getCode()
    {
        $lastId = $this->model->select(['id'])->latest('id')->first();
        $id = $lastId ? $lastId['id'] : 0;
        $total = 'NV-' . sprintf("%04d", $id + 1);

        return $total;
    }

    public function getCodeAuto()
    {
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'data' => [
                'code' => $this->getCode(),
            ],
        ], 200);
    }

    public function duplicateEmployye($id)
    {
        $entry = $this->model->with(['department', 'bank', 'city'])->find($id);

        if(!$entry){
            return response()->json([
                'code' => 404,
                'status' => 'error',
                'message' => 'Không tìm thấy thông tin bản ghi.',
            ], 404);
        }
        try {
            $entry['code'] = $this->getCode();
            $data = $this->model->create($entry->toArray());
            return response()->json([
                'code' => 200,
                'status' => 'success',
                'message' => "Nhân bản bản ghi thành công.",
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 422,
                'status' => 'error',
                'message' => $th->getMessage(),
            ], 422);
        }

    }
}
