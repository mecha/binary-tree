<?php

namespace Dhii\BinaryTree\Node;

use \Mecha\ComparableInterop\ComparableInterface;

/**
 * Represents a node that can have values inserted.
 *
 * @since [*next-version*]
 */
interface InsertionNodeInterface
{

    /**
     * Inserts a value into this node.
     *
     * @since [*next-version*]
     * @param ComparableInterface $value The value to insert.
     * @return boolean True if the value was inserted, false if the value already exists.
     */
    public function insert(ComparableInterface $value);

}
