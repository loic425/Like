<?php

/*
 * This file is part of the Like package.
 *
 * (c) Loïc Frémont
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Loic425\Component\Like\Model;

/**
 * @author Loïc Frémont <loic@mobizel.com>
 */
interface DislikableInterface
{
    /**
     * @param int $dislikeCount
     */
    public function setDislikeCount($dislikeCount);

    /**
     * @return int
     */
    public function getDislikeCount();
}
