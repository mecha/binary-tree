<?php

/*
 * This file is a part of BinaryTree
 *
 * Copyright 2016 Miguel Muscat <miguelmuscat93@gmail.com>.
 *
 * The MIT License
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace Mecha\BinaryTree\Node;

/**
 * Generic interface for a tree node.
 *
 * @author Miguel Muscat <miguelmuscat93@gmail.com>
 */
interface NodeInterface
{

    /**
     * Gets this node's value.
     *
     * @return ComparableInterface The node's value.
     */
    public function getValue();

    /**
     * Sets this node's value.
     *
     * @param ComparableInterface $value The new value.
     * @return NodeInterface This instance.
     */
    public function setValue(ComparableInterface $value);

    /**
     * Gets the left child node.
     *
     * @return NodeInterface|null A NodeInterface instance or null if this node has no left child.
     */
    public function getLeft();

    /**
     * Sets the left child node.
     *
     * The implementor must also ensure that the node given as parameter, if not null, has its parent pointer
     * updated to point to this instance.
     *
     * @param NodeInterface $left The new left child node. Use null to remove the left child node.
     * @return NodeInterface This instance.
     */
    public function setLeft(NodeInterface $left = null);

    /**
     * Gets the right child node.
     *
     * @return NodeInterface|null A NodeInterface instance or null if this node has no right child.
     */
    public function getRight();

    /**
     * Sets the right child node.
     *
     * The implementor must also ensure that the node given as parameter, if not null, has its parent pointer
     * updated to point to this instance.
     *
     * @param NodeInterface $right The new right child node. Use null to remove the right child node.
     * @return NodeInterface This instance.
     */
    public function setRight(NodeInterface $right = null);

    /**
     * Gets the parent node.
     *
     * @return NodeInterface|null The parent node instance, or null if this node is the root node.
     */
    public function getParent();

    /**
     * Sets the parent node.
     *
     * The implementor must take great care when using this method.
     * If a node is to be moved to a different parent, it is preferred to call Node::setLeft() or Node::setRight()
     * on the parent. Both of these methods should take care to update the parent pointer.
     *
     * @param NodeInterface $parent The new parent node. Use null to make this node a root node.
     * @return NodeInterface This instance.
     */
    public function setParent(NodeInterface $parent = null);

    /**
     * Checks if this node is a leaf node.
     *
     * @return boolean True if this node has no child nodes, false otherwise.
     */
    public function isLeaf();

    /**
     * Gets the left-most node in this node's subtrees, including this node.
     *
     * @return NodeInterface The left-most node. Can also be this instance.
     */
    public function getLeftMost();

    /**
     * Gets the right-most node in this node's subtrees, including this node.
     *
     * @return NodeInterface The right-most node. Can also be this instance.
     */
    public function getRightMost();

    /**
     * Searches for a specific value in the node and its subtrees.
     *
     * @param ComparableInterface $value The value to search.
     * @return NodeInterface|null The NodeInterface instance of the found node or null if not found.
     */
    public function search(ComparableInterface $value);

    /**
     * Inserts a new value into one of this node's subtrees.
     *
     * @param ComparableInterface $value The value to insert.
     * @return NodeInterface|null The inserted node instance, or null on failure.
     */
    public function insert(ComparableInterface $value);

    /**
     * Removes the node with a specific value.
     *
     * @param ComparableInterface $value The value to search for.
     * @return NodeInterface|null The removed node instance, or null on failure.
     */
    public function remove(ComparableInterface $value);

}
