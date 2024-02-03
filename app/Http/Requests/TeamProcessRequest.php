<?php

namespace App\Http\Requests;

use App\Enums\PlayerPosition;
use App\Enums\PlayerSkill;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class TeamProcessRequest extends FormRequest
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
            '*.position' => ['required', new Enum(PlayerPosition::class)],
            '*.mainSkill' => ['required', new Enum(PlayerSkill::class)],
            '*.numberOfPlayers' => ['required', 'numeric', 'min:1']
        ];
    }

}
