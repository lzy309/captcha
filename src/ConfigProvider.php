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

namespace Lizhaoyang\Captcha;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                CaptchaInterface::class => CaptchaFactory::class
            ],
            'annotations' => [
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config for captcha.',
                    'source' => __DIR__ . '/../publish/captcha.php',
                    'destination' => BASE_PATH . '/config/autoload/captcha.php',
                ],
            ],
        ];
    }
}
