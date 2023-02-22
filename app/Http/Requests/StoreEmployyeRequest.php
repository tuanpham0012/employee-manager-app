<?php

namespace App\Http\Requests;

use App\Models\Bank;
use App\Models\City;
use DateTime;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Foundation\Http\FormRequest;

class StoreEmployyeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'code' => [
                'required',
                function($attribute, $value, $fail){
                    if($value === null){
                        return;
                    }
                    $check = Employee::where('code', 'like', $value)->first();
                    if($check){
                        return $fail(trans('Mã nhân viên :code đã tồn tại trong hệ thống, vui lòng kiểm tra lại.', ['code' => $value]));
                    }
                }
            ],
            'name' => [
                'required',
            ],
            'department_id' => [
                'required',
                function($attribute, $value, $fail){
                    if($value === null){
                        return;
                    }
                    $check = Department::find($value);
                    if(!$check){
                        return $fail(trans('Đơn vị không tồn tại.'));
                    }
                }
            ],
            'title',
            'date_of_birth' => [
                function($attribute, $value, $fail){
                    if($value === null){
                        return;
                    }
                    if($this->validateDate($value, 'Y-m-d') === false){
                        return $fail(trans('Ngày sinh không đúng định dạng.'));
                    }

                    if($value > date('Y-m-d')){
                        return $fail(trans('Ngày sinh phải nhỏ hơn ngày hiện tại.'));
                    }
                }
            ],
            'gender' => [
                function($attribute, $value, $fail){
                    if($value === null){
                        return;
                    }
                    if($value != 0 && $value != 1 && $value != 2){
                        return $fail(trans('Giá trị không đúng định dạng'));
                    }
                }
            ],
            'cmnd' => [
                function($attribute, $value, $fail){
                    if($value === null){
                        return;
                    }
                    if(strlen($value) > 15){
                        return $fail(trans('Giá trị tối đa 15 kí tự.'));
                    }
                }
            ],
            'license_date' => [
                function($attribute, $value, $fail){
                    if($value === null){
                        return;
                    }
                    if($this->validateDate($value, 'Y-m-d') === false){
                        return $fail(trans('Ngày cấp không đúng định dạng.'));
                    }

                    if($value > date('Y-m-d')){
                        return $fail(trans('Ngày cấp phải nhỏ hơn ngày hiện tại.'));
                    }
                }
            ],
            'city_id' => [
                function($attribute, $value, $fail){
                    if($value === null){
                        return;
                    }
                    $check = City::find($value);
                    if(!$check){
                        return $fail(trans('Nơi cấp không tồn tại.'));
                    }
                }
            ],
            'address',
            'phone' => [
                function ($attribute, $value, $fail) {
                    if ($value === null) {
                        return;
                    }
                    if (!is_numeric($value)) {
                        return $fail(trans("Số điện thoại không đúng định dạng."));
                    }
                    if (strlen($value) > 15) {
                        return $fail(trans("Email tối đa 15 kí tự."));
                    }
                }
            ],
            'landline_phone' => [
                function ($attribute, $value, $fail) {
                    if ($value === null) {
                        return;
                    }
                    if (!is_numeric($value)) {
                        return $fail(trans("Số điện thoại không đúng định dạng."));
                    }
                    if (strlen($value) > 15) {
                        return $fail(trans("Email tối đa 15 kí tự."));
                    }
                }
            ],
            'email' => [
                function ($attribute, $value, $fail) {
                    if ($value === null) {
                        return;
                    }
                    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        return $fail(trans("Email không đúng định dạng."));
                    }
                    if (strlen($value) > 30) {
                        return $fail(trans("Email tối đa 30 kí tự."));
                    }
                }
            ],
            'bank_number'=> [
                function ($attribute, $value, $fail) {
                    if ($value === null) {
                        return;
                    }
                    if (!is_numeric($value)) {
                        return $fail(trans("Số tài khoản không đúng định dạng."));
                    }
                    if (strlen($value) > 15) {
                        return $fail(trans("Số tài khoản tối đa 15 kí tự."));
                    }
                }
            ],
            'bank_id' => [
                function($attribute, $value, $fail){
                    if($value === null){
                        return;
                    }
                    $check = Bank::find($value);
                    if(!$check){
                        return $fail(trans('Ngân hàng không tồn tại.'));
                    }
                }
            ],
            'bank_branch' => [
                function ($attribute, $value, $fail) {
                    if ($value === null) {
                        return;
                    }
                    if (strlen($value) > 15) {
                        return $fail(trans("Email tối đa 30 kí tự."));
                    }
                }
            ],
            'is_customer' => [
                function($attribute, $value, $fail){
                    if($value === null){
                        return;
                    }
                    if($value != 0 && $value != 1){
                        return $fail(trans('Giá trị không đúng định dạng'));
                    }
                }
            ],
            'is_supplier' => [
                function($attribute, $value, $fail){
                    if($value === null){
                        return;
                    }
                    if($value != 0 && $value != 1){
                        return $fail(trans('Giá trị không đúng định dạng'));
                    }
                }
            ],
        ];
    }

    public function validateDate($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
        // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
        return $d && $d->format($format) === $date;
    }

    public function messages()
    {
        return [
            'code.required' => trans('Mã không được để trống.'),
            'name.required' => trans('Tên không được để trống.'),
            'department_id.required' => trans('Đơn vị không được để trống.'),
        ];
    }
}
