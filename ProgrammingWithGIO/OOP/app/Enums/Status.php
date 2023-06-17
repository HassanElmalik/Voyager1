<?php

// namespace Enums;

class Status
{
    public const STATUS_PENDING = 'pending';
    public const STATUS_DECLINED = 'declined';
    public const STATUS_PAID = 'paid';

    public const ALL_STATUES = [
        self::STATUS_PAID       => 'Paid',
        self::STATUS_PENDING    => 'Pending',
        self::STATUS_DECLINED   => 'Declined',
    ];
}