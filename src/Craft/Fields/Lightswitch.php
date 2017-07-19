<?php

namespace markhuot\CraftQL\Craft\Fields;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\EnumType;

class Lightswitch {

  function getDefinition($field) {
    return [$field->handle => [
      'type' => Type::boolean(),
      'resolve' => function ($root, $args) use ($field) {
        return $root->{$field->handle};
      }
    ]];
  }

}