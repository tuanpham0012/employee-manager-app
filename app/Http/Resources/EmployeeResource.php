<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'name' => $this->name,
            'department_id' => $this->department_id,
            'title' => $this->title,
            'date_of_birth' => $this->date_of_birth,
            'gender' => $this->getGender($this->gender),
            'cmnd' => $this->cmnd,
            'license_date' => $this->license_date,
            'license_place' => $this->license_place,
            'address' => $this->address,
            'phone' => $this->phone,
            'landline_phone' => $this->landline_phone,
            'email' => $this->email,
            'bank_number' => $this->bank_number,
            'bank_id' => $this->bank_id,
            'bank_branch' => $this->bank_branch,
            'is_customer' => $this->is_customer,
            'is_supplier' => $this->is_supplier,
            // 'city' => new CityResource($this->city),
            'bank' => new BankResource($this->bank),
            'department' => new DepartmentResource($this->department)
        ];
        // return parent::toArray($request);
    }

    public function getGender($var)
    {
        switch ($var) {
            case '0':
                return 'Nam';
                break;
            case '1':
                return 'Nữ';
                break;
            case '2':
                return 'Khác';
                break;

            default:
                return 'Khác';
                break;
        }
    }
}
