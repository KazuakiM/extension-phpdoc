<?php

/**
 * Volatile.
 * The Volatile class is new to pthreads v3. Its introduction is a consequence of the new immutability semantics of Threaded members of Threaded classes. The Volatile class enables for mutability of its Threaded members, and is also used to store PHP arrays in Threaded contexts.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.volatile.php
 */
class Volatile extends Threaded implements Collectable, Traversable
{
    /* Inherited methods */
    //public function Threaded::chunk(int $size, bool $preserve): array
    //public function Threaded::count(): int
    //public function Threaded::extend(string $class): bool
    //public function Threaded::from(Closure $run[, Closure $construct[, array $args]]): Threaded
    //public function Threaded::getTerminationInfo(): array
    //public function Threaded::isRunning(): bool
    //public function Threaded::isTerminated(): bool
    //public function Threaded::isWaiting(): bool
    //public function Threaded::lock(): bool
    //public function Threaded::merge(mixed $from[, bool $overwrite]): bool
    //public function Threaded::notify(): bool
    //public function Threaded::notifyOne(): bool
    //public function Threaded::pop(): bool
    //public function Threaded::run(): void
    //public function Threaded::shift(): mixed
    //public function Threaded::synchronized(Closure $block[, mixed $...]): mixed
    //public function Threaded::unlock(): bool
    //public function Threaded::wait([int $timeout]): bool
}
