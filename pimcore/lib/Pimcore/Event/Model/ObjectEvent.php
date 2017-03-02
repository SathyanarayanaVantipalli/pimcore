<?php

namespace Pimcore\Event\Model;

use Pimcore\Event\Traits\ArgumentsAwareTrait;
use Pimcore\Model\Object\AbstractObject;
use Symfony\Component\EventDispatcher\Event;

class ObjectEvent extends Event implements ElementEventInterface {

    use ArgumentsAwareTrait;

    /**
     * @var AbstractObject
     */
    protected $object;

    /**
     * DocumentEvent constructor.
     * @param AbstractObject $object
     * @param array $arguments
     */
    function __construct(AbstractObject $object, array $arguments = [])
    {
        $this->object = $object;
        $this->arguments = $arguments;
    }

    /**
     * @return AbstractObject
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param AbstractObject $object
     */
    public function setObject($object)
    {
        $this->object = $object;
    }

    /**
     * @return AbstractObject
     */
    public function getElement()
    {
        return $this->getObject();
    }
}