<?php
namespace SocialiteProviders\Bitly;

use SocialiteProviders\Manager\SocialiteWasCalled;

class BitlyExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'bitly', __NAMESPACE__.'\Provider'
        );
    }
}
