<?php

namespace App\GraphQL\Validators\Mutation;

use Nuwave\Lighthouse\Validation\Validator;
use Illuminate\Validation\Rule;

final class DeletePostValidator extends Validator
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
                'exists:posts,id',
            ],

        ];
    }
}  