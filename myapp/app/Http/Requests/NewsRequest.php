<?php namespace App\Http\Requests;


class NewsRequest extends Request {

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
			'title' 	=> 'required|min:3',
			'category' 	=> 'in:1,2,3,4,5,6',
			'date'		=> 'required|date',
//			'picture' 	=> 'mimes:png,jpeg,jpg',
			'details' 	=> 'required',
			'reference'	=> 'required',
		];
	}

	public function messages()
	{
		return [
			'title.required'		=> 'กรุณากรอกข้อมูล หัวข้อข่าว ให้ครบถ้วน',
			'date.required'	=> 'กรุณากรอกข้อมูล วันของข่าว ให้ครบถ้วน',
			'details.required'		=> 'กรุณากรอกข้อมูล รายละเอียด ให้ครบถ้วน',
			'reference.required'	=> 'กรุณากรอกข้อมูล แหล่งที่มา ให้ครบถ้วน',
			'in'		=> 'กรุณาเลือกประเภทข่าว',
			'date'		=> 'กรุณากรอกข้อมูล เดือน/วัน/ปี (mm/dd/yyyy) ให้ถูกต้อง',
//			'mimes'		=> 'กรุณาใช้ภาพที่มีนามสกุลไฟล์ png, jpg, jpeg',
		];
	}

}
