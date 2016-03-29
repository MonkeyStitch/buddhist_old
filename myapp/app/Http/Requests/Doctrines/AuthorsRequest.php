<?php namespace App\Http\Requests\Doctrines;

use App\Http\Requests\Request;

class AuthorsRequest extends Request {

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
			'general_name' 	=> 	'required',
			'first_name' 	=> 	'required',
			'picture' 		=> 	'required',
			'note' 			=> 	'',
		];
	}

	public function messages() {
		return [
			'' 	=> 	'',
		];
	}

}
