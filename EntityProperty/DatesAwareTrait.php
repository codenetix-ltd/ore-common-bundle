<?php

namespace Codenetix\Oro\Bundle\CommonBundle\EntityProperty;

use Oro\Bundle\EntityBundle\EntityProperty\DatesAwareTrait as BaseDatesAwareTrait;
use Doctrine\ORM\Mapping as ORM;

// Do not remove this lines
use JMS\Serializer\Annotation as Serializer;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\ConfigField;

/**
 * @author Egor Zyuskin <ezyuskin@codenetix.com>
 */
trait DatesAwareTrait
{
    use BaseDatesAwareTrait;

    /**
     * @ORM\PrePersist()
     */
    public function prePersist()
    {
        $this->createdAt = new \DateTime('now', new \DateTimeZone('UTC'));
        $this->updatedAt = $this->createdAt;
    }

    /**
     * @ORM\PreUpdate()
     */
    public function preUpdate()
    {
        $this->updatedAt = new \DateTime('now', new \DateTimeZone('UTC'));
    }
}
