<?php

namespace Dhii\BinaryTree\Node;

/**
 * Represents a node that is aware of its parent node.
 *
 * @since [*next-version*]
 */
interface ParentAwareNodeInterface
{

    /**
     * Gets the parent node, if any.
     * 
     * @return ParentAwareNodeInterface|null The parent node if it exists or null if not.
     */
    public function getParent();

}
