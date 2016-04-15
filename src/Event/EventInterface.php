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

namespace Mecha\BinaryTree\Event;

/**
 * Generic interface for a node event.
 *
 * @author Miguel Muscat <miguelmuscat93@gmail.com>
 */
interface EventInterface
{

    /**
     * Gets the node related to the event.
     *
     * @return \Mecha\BinaryTree\Node\NodeInterface The node instance.
     */
    public function getNode();

    /**
     * Gets the time of the event.
     *
     * @return \DateTime A DateTime instance,
     */
    public function getTime();

    /**
     * Gets the event type.
     *
     * @return string A string describing the type of event that occured.
     */
    public function getType();

    /**
     * Gets additional event data.
     *
     * @return array An array with additional data attached to the event by the dispatcher.
     */
    public function getData();

}
