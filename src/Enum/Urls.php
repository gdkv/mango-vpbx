<?php

namespace Epictest\MangoVpbx\Enum;

use Elao\Enum\Enum;

/**
 * @method static Urls CALL()
 * @method static Urls GROUP()
 * @method static Urls HANGUP()
 */
final class Urls extends Enum {

    public const CALL = 'commands/callback';
    public const GROUP = 'commands/callback_group';
    public const HANGUP = 'commands/call/hangup';

    public static function values(): array
    {
        return [
            self::CALL,
            self::GROUP,
            self::HANGUP,
        ];
    }
    
}