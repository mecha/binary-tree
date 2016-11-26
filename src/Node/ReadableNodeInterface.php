<?php

namespace Dhii\BinaryTree\Node;

use \Mecha\ComparableInterop\ComparableInterface;

/**
 * Represents a node that allows reading of its value.
 *
 * @since [*next-version*]
 */
interface ReadableNodeInterface
{

    /**
     * Gets the node's value.
     *
     * @return ComparableInterface This node's value.
     */
    public function getValue();

}
