<?php

namespace PHP2C\Parser\Node;

use PHP2C\Parser\NodeAbstract;

/**
 * @property PHPParser_Node_Expr $value Value to pass
 * @property bool                $byRef Whether to pass by ref
 */
class Arg extends NodeAbstract
{
    /**
     * Constructs a function call argument node.
     *
     * @param PHPParser_Node_Expr $value      Value to pass
     * @param bool                $byRef      Whether to pass by ref
     * @param array               $attributes Additional attributes
     */
    public function __construct(Expr $value, $byRef = false, array $attributes = array()) {
        parent::__construct(
            array(
                'value' => $value,
                'byRef' => $byRef
            ),
            $attributes
        );
    }
}