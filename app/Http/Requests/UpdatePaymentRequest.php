<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaymentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'payment_method' => 'sometimes|required|string|max:255',
            'amount_paid' => 'sometimes|required|numeric|min:0',
            'payment_date' => 'nullable|date',
            'status' => 'sometimes|in:paid,failed,refunded',
            'transaction_id' => 'nullable|string|max:255',
        ];
    }
}