<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVoucherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'code'        => 'required|unique:vouchers',
            'type'        => 'required|in:"one","many"',
            'start_date'  => 'nullable|date',
            'end_date'    => 'nullable|date',
            'status'      => 'required|in:"active","inactive"',
            'batch_id'    => 'required|numberic',
        ];
    }
}
