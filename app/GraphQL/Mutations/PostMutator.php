<?php

namespace App\GraphQL\Mutations;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

final class PostMutator
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
    }

    public function fetch_mine(GraphQLContext $context)
    {
    	$posts = $context->user()->posts;
        return $posts;
    }
    
}
