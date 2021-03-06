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
interface LikableInterface
{
    /**
     * @return LikeInterface[]
     */
    public function getLikes();

    /**
     * @param LikeInterface $like
     */
    public function addLike(LikeInterface $like);

    /**
     * @param LikeInterface $like
     */
    public function removeLike(LikeInterface $like);

    /**
     * @param int $likeCount
     */
    public function setLikeCount($likeCount);

    /**
     * @return int
     */
    public function getLikeCount();
}
