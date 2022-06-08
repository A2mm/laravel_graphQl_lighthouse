<?php

namespace App\GraphQL\Validators\Mutation;

use Nuwave\Lighthouse\Validation\Validator;
use Illuminate\Validation\Rule;

final class UpdatePostValidator extends Validator
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

            'author_id' => [
                'required',
                'exists:users,id',
            ],

            'title' => [
                'required',
                'min:5',
                Rule::unique('posts', 'title')->ignore($this->arg('id'), 'id'),
            ],

            'content' => [
                'required',
                'min:5',
                'max:30',
            ],

        ];
    }
} 
