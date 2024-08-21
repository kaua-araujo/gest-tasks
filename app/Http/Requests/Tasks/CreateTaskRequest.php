<?php

namespace App\Http\Requests\Tasks;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateTaskRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'start_date'=> 'required',
            'end_date'=> 'required',
            'category_id'=> 'required',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['error' => $validator->errors()->first()], 400));
    }

    public function messages()
    {
        return [
            'title.required' => 'É necessário informar a rua!',
            'description.required' => 'É necessário informar a descrição!',
            'start_date.required' => 'É necessário informar a data de inicio!',
            'end_date.required' => 'É necessário informar a data de termino!',
            'category_id.required' => 'É necessário informar a categoria!',
        ];
    }
}
