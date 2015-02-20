<?php
namespace SocialiteProviders\Bitly;

use SocialiteProviders\Manager\SocialiteWasCalled;

class BitlyExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('bitly', __NAMESPACE__.'\Provider');
    }
}
