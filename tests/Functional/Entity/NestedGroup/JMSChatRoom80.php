<?php

/*
 * This file is part of the NelmioApiDocBundle package.
 *
 * (c) Nelmio
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\ApiDocBundle\Tests\Functional\Entity\NestedGroup;

use JMS\Serializer\Annotation as Serializer;

/**
 * User.
 *
 * @Serializer\ExclusionPolicy("all")
 */
class JMSChatRoom80
{
    /**
     * @Serializer\Type("integer")
     *
     * @Serializer\Expose
     *
     * @Serializer\Groups({"Default"})
     */
    private $id1;

    /**
     * @Serializer\Type("integer")
     *
     * @Serializer\Expose
     *
     * @Serializer\Groups({"mini"})
     */
    private $id2;

    /**
     * @Serializer\Type("integer")
     *
     * @Serializer\Expose
     */
    private $id3;
}