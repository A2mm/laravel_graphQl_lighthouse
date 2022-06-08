<?php

namespace App\GraphQL\Validators\Mutation;

use Nuwave\Lighthouse\Validation\Validator;
use Illuminate\Validation\Rule;

final class UpdateUserValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            // TODO Add your validation rules

            'id' => [
                'required',
                'exists:users,id',
            ],
            'name' => [
                'sometimes',
                'min:5',
                Rule::unique('users', 'name')->ignore($this->arg('id'), 'id'),
            ],

        ];
    }
}  