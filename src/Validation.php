<?php

namespace Collect;

class Validation
{
    public const PASSWORD = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}$/';
    public const NAME_PATTERN = '/^[А-Яа-яЁё\s\-\'’]+$/u';
    public const HOURS_PATTERN = '/^([01]\d|2[0-3]):([0-5]\d)$/';
    public const ADDRESS_PATTERN = '/^[А-Яа-яЁё0-9\s\-,.\/]+$/u';
}