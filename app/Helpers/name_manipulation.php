<?php
function abbreviateName($fullName): string
{
    $nameParts = explode(' ', $fullName);

    if (count($nameParts) < 3) {
        return $fullName;
    }

    $firstName = $nameParts[0];
    $middleInitial = mb_substr($nameParts[1], 0, 1);
    $lastInitial = mb_substr($nameParts[2], 0, 1);

    return "{$firstName} {$middleInitial}.{$lastInitial}.";
}
