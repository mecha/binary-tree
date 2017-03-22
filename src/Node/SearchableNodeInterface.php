<?php

namespace Dhii\BinaryTree\Node;

use \Mecha\ComparableInterop\ComparableInterface;

/**
 * Represents a node that allows searching of values.
 *
 * @since [*next-version*]
 */
interface SearchableNodeInterface
{

    /**
     * Searches for a value in this node and its child nodes.
     *
     * @since [*next-version*]
     * @param ComparableInterface $value The value to search for.
     * @return boolean True if the value was found, false otherwise.
     */
    public function search(ComparableInterface $value);

}
