**验证码组件**
------

用于生产验证码，支持Hyperf框架，使用Composer安装,使用该组件需开启hyperf框架中的session组件

```
composer require lizhaoyang/captcha
```

**配置定义**
------

组件本身提供了默认配置，即使不做任何设置也可以直接生成验证码，需要对验证码进行自定义配置可以在config/autoload中添加captcha.php进行配置

```
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
```

**直接使用**

```
// 生产验证码
$config = $this->container->get(ConfigInterface::class);
$captcha = new Captcha($config, $this->container->get(SessionInterface::class));
return $captcha->create($config->get('captcha', []));

// 验证
$captcha->check($code);
```

#### 动态设置
```
$captcha->setFontSize(25);
$captcha->setImageWidth(100);
$captcha->setImageHeight(50);
$captcha->setLength(4);
$captcha->setUseCurve(true);
$captcha->setUseNoise(true);
```
