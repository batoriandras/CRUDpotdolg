<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCharacterRequest extends FormRequest
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
            "name"=>"required|min:3|max:100",
            "gender"=>"required|min:3|max:6",
            "job"=>"required|min:3|max:255",
            "wand"=>"required|min:3|max:50",
            "species"=>"required|min:3|max:50",
            "patronus"=>"min:3|max:50",
            "birth"=>"date",
            "death"=>"date",
            "house_id"=>"required|numeric|exists:house,id"
        ];
    }
}
