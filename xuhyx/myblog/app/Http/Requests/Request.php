<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\MessageBag;

abstract class Request extends FormRequest
{
    /**
	 * {@inheritdoc}
	 */
	protected function formatErrors(Validator $validator)
	{
	    return $validator->errors()->all();

	}

	public function messages()
	{
	    return [
	       //
	    ];
	    
	}
}
