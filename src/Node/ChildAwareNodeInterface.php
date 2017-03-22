<?php

namespace Dhii\BinaryTree\Node;

/**
 * Represents a node that is aware of its child nodes.
 *
 * @since [*next-version*]
 */
interface ChildAwareNodeInterface
{

    /**
     * Gets the left child node, if any.
     *
     * @since [*next-version*]
     * @return ReadableNodeInterface|null The left child node if it exists or null if not.
     */
    public function getLeftChild();

    /**
     * Gets the right child node, if any.
     *
     * @since [*next-version*]
     * @return ReadableNodeInterface|null The right child node if it exists or null if not.
     */
    public function getRightChild();

}
