<?php

namespace Mecha\BinaryTree\Event;

/**
 * Generic definition for an object that listens for node events.
 *
 * @author Miguel Muscat <miguelmuscat93@gmail.com>
 */
interface ListenerInterface
{

    /**
     * Triggered when a node has been inserted.
     *
     * @param EventInterface $event The event instance.
     */
    public function onNodeInserted(EventInterface $event);

    /**
     * Triggered when a duplicate node has been encountered, but not necessarily inserted.
     *
     * @param EventInterface $event The event instance.
     */
    public function onNodeDuplicate(EventInterface $event);

    /**
     * Triggered when a node's value has been changed.
     *
     * @param EventInterface $event The event instance.
     */
    public function onNodeChanged(EventInterface $event);

    /**
     * Triggered when an existing node is moved inside the tree.
     *
     * @param EventInterface $event The event instance.
     */
    public function onNodeMoved(EventInterface $event);

    /**
     * Triggered when a node has been removed.
     *
     * @param EventInterface $event The event instance.
     */
    public function onNodeRemoved(EventInterface $event);

}
