<?php

namespace ProcessMaker\Nayra\Bpmn\Models;

use ProcessMaker\Nayra\Bpmn\BaseTrait;
use ProcessMaker\Nayra\Contracts\Bpmn\MessageFlowInterface;
use ProcessMaker\Nayra\Contracts\Bpmn\SignalInterface;

/**
 * Implementation of signal class.
 *
 * @package \ProcessMaker\Nayra\Bpmn\Models
 */
class Signal implements SignalInterface
{
    use BaseTrait;

    /**
     * @var string $id
     */
    private $id;

    /**
     * @var string $id
     */
    private $name;

    /** @var MessageFlowInterface */
    private $messageFlow;

    /**
     * Returns the id of the message
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the id of the message
     * @param string $value
     */
    public function setId($value)
    {
        $this->id = $value;
    }

    /**
     * Returns the name of the message
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name of the signal
     *
     * @param string $value
     */
    public function setName($value)
    {
        $this->name = $value;
    }

    /**
     * Sets the message flow to which this signal pertains
     *
     * @param MessageFlowInterface $messageFlow
     *
     * @return $this
     */
    public function setMessageFlow(MessageFlowInterface $messageFlow)
    {
        $this->messageFlow = $messageFlow;
        return $this;
    }

    /**
     * Returns the message flow to which this signal pertains
     *
     * @return mixed
     */
    public function getMessageFlow()
    {
        return $this->messageFlow;
    }
}
