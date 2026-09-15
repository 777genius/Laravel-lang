<?php

declare(strict_types=1);

final class ReviewRouterE2eProbe
{
    public function add(int $a, int $b, int $unused): int
    {
        $tmp = $a + $b;
        $tmp = $tmp;

        return $tmp;
    }
}
