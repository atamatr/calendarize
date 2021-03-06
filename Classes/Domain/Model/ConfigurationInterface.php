<?php
/**
 * Configuration Interface for constants.
 */
namespace HDNET\Calendarize\Domain\Model;

/**
 * Configuration Interface for constants.
 */
interface ConfigurationInterface
{
    const TYPE_TIME = 'time';

    const TYPE_GROUP = 'group';

    const TYPE_EXTERNAL = 'external';

    const HANDLING_INCLUDE = 'include';

    const HANDLING_EXCLUDE = 'exclude';

    const HANDLING_OVERRIDE = 'override';

    const HANDLING_CUTOUT = 'cutout';

    const FREQUENCY_NONE = '';

    const FREQUENCY_DAILY = 'daily';

    const FREQUENCY_WEEKLY = 'weekly';

    const FREQUENCY_MONTHLY = 'monthly';

    const FREQUENCY_YEARLY = 'yearly';

    const DAY_NONE = '';

    const DAY_SPECIAL_WEEKDAY = 'weekday';

    const DAY_SPECIAL_WORKDAY = 'workday';

    const DAY_SPECIAL_BUSINESS = 'business';

    const DAY_SPECIAL_WEEKEND = 'weekend';

    const DAY_MONDAY = 'monday';

    const DAY_TUESDAY = 'tuesday';

    const DAY_WEDNESDAY = 'wednesday';

    const DAY_THURSDAY = 'thursday';

    const DAY_FRIDAY = 'friday';

    const DAY_SATURDAY = 'saturday';

    const DAY_SUNDAY = 'sunday';

    const RECURRENCE_NONE = '';

    const RECURRENCE_FIRST = 'first';

    const RECURRENCE_SECOND = 'second';

    const RECURRENCE_THIRD = 'third';

    const RECURRENCE_FOURTH = 'fourth';

    const RECURRENCE_FIFTH = 'fifth';

    const RECURRENCE_LAST = 'last';

    const RECURRENCE_NEXT_TO_LAST = 'next2last';

    const RECURRENCE_THIRD_LAST = 'thirdLast';

    const STATE_DEFAULT = 'default';

    const STATE_CANCELED = 'canceled';
}
