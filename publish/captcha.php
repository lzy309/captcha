<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

return [
    'fontSize' => env('CAPTCHA_FONTSIZE', 25),
    'useCurve' => env('CAPTCHA_USECURVE', true),
    'useNoise' => env('CAPTCHA_USENOISE', true),
    'imageH'   => env('CAPTCHA_IMAGE_WIDTH', 0),
    'imageW'   => env('CAPTCHA_IMAGE_HEIGHT', 0),
    'length'   => env('CAPTCHA_LENGTH', 5),
    'bg'       => env('CAPTCHA_BG', [243, 251, 254]),
    'reset'    => env('CAPTCHA_RESET', true)
];
