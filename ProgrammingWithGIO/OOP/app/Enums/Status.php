<?php

// namespace Enums;

class Status
{
    public const PENDING = 'pending';
    public const DECLINED = 'declined';
    public const PAID = 'paid';

    public const ALL_STATUES = [
        self::PAID       => 'Paid',
        self::PENDING    => 'Pending',
        self::DECLINED   => 'Declined',
    ];
}