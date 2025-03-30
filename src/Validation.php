<?php

namespace Collect;

class Validation
{
    public const PASSWORD = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}$/';
    public const NAME_PATTERN = '/^[\p{L} \-\'’]+$/u';
    public const HOURS_PATTERN = '/^([01]\d|2[0-3]):([0-5]\d)$/';
}