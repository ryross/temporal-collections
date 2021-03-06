<?php

/*
 * This file is part of the Temporal Collections library.
 *
 * (c) Chris Wilkinson
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace TheWilkyBarKid\TemporalCollections;

use ArrayAccess;
use Countable;
use DateTime;
use DateTimeInterface;
use InvalidArgumentException;
use IteratorAggregate;

/**
 * A temporal collection is a simple way to implement a temporal property, that
 * is a property that changes its value over time.
 *
 * @author Chris Wilkinson <chriswilkinson84@gmail.com>
 */
interface TemporalCollection extends ArrayAccess, Countable, IteratorAggregate
{
    /**
     * Set value for a date/time.
     *
     * @param mixed                                  $value
     * @param DateTime|DateTimeInterface|string|null $effectiveFrom
     * @param DateTime|DateTimeInterface|string|null $effectiveTo
     *
     * @throws InvalidArgumentException If a date cannot be recognised.
     */
    public function set($value, $effectiveFrom = null, $effectiveTo = null);

    /**
     * Get value for a date/time.
     *
     * @param DateTime|DateTimeInterface|string|null $when
     *
     * @return mixed
     */
    public function get($when = null);

    /**
     * Get all values.
     *
     * @return TemporalValue[]
     */
    public function all();
}
