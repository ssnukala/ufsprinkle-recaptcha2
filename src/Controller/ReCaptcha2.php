<?php
/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/licenses/UserFrosting.md (MIT License)
 */
namespace UserFrosting\Sprinkle\ReCaptcha2\Controller;

use UserFrosting\Session\Session;

/**
 * Captcha Class
 *
 * Implements the captcha for user registration.
 *
 * @author r3wt
 * @author Alex Weissman (https://alexanderweissman.com)
 * @see http://www.userfrosting.com/components/#messages
 */
class ReCaptcha2
{
    /**
     * @var string Google API Site Key.
     */
    protected $site_key;

    /**
     * @var string Google API Site Secret
     */
    protected $site_secret;

    /**
     * Check that the specified code, when hashed, matches the code in the session.
     *
     * Also, stores the specified code in the session with an md5 hash.
     * @param string
     * @return bool
     */
    public function verifyCaptcha($code)
    {
        return (md5($code) == $this->session[$this->key]);
    }
}
