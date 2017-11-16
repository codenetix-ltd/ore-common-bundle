<?php

namespace Codenetix\Oro\Bundle\CommonBundle\EntityProperty;

use Doctrine\ORM\Mapping as ORM;

/**
 * @author Egor Zyuskin <ezyuskin@codenetix.com>
 */
trait IdAwareTrait
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
