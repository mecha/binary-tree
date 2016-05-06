<?php

namespace Mecha\BinaryTree\Event;

/**
 * Generic definition for an object that can dispatch events.
 *
 * @author Miguel Muscat <miguelmuscat93@gmail.com>
 */
interface DispatcherInterface
{

    /**
     * Gets all event listeners.
     *
     * @return ListenerInterface[] An array of Listener instances.
     */
    public function getListeners();

    /**
     * Adds a listener.
     *
     * @param ListenerInterface $listener The listener instance to add.
     * @return DispatcherInterface This instance.
     */
    public function addListener(ListenerInterface $listener);

    /**
     * Removes a listener.
     *
     * @param ListenerInterface $listener The listener instance to remove.
     * @return DispatcherInterface This instance.
     */
    public function removeListener(ListenerInterface $listener);

    /**
     * Checks if a listener instance is registered to this dispatcher.
     *
     * @param ListenerInterface $listener The listener instance to search for.
     * @return boolean True if the listener instance was found, false otherwise.
     */
    public function hasListener(ListenerInterface $listener);

    /**
     * Dispatches an event to all registered listeners.
     *
     * @param EventInterface $event The event to pass to the invoked method.
     * @return DispatcherInterface This instance.
     */
    public function dispatch(EventInterface $event);

}
