<?php

class JdHelper extends JdClient
{

    const CSRF_TOKEN = 1;

    const CSRF_AUTHORIZE = 2;

    public $redirectUri;

    protected $authorizeUrl = 'https://auth.360buy.com/oauth/authorize';

    protected $tokenUrl = 'https://oauth.jd.com/oauth/token';

    /**
     * 设置沙箱环境
     */
    public function sandboxEnv()
    {
        $this->authorizeUrl = 'http://auth.sandbox.360buy.com/oauth/authorize';
        $this->tokenUrl = 'http://auth.sandbox.360buy.com/oauth/token';
        $this->gatewayUrl = 'http://gw.api.sandbox.360buy.com/routerjson';
    }

    public function getAuthorizeUrl($redirectUri = null)
    {
        $redirectUri || $redirectUri = $this->redirectUri;
        $param['response_type'] = 'code';
        $param['client_id'] = $this->appkey;
        $param['redirect_uri'] = $redirectUri;
        $param['state'] = $this->mkCsrf(self::CSRF_AUTHORIZE);
        $param['scope'] = 'read';
        return $this->authorizeUrl . '?' . http_build_query($param);
    }

    public function fetchAccessToken($code, $redirectUri = null)
    {
        $redirectUri || $redirectUri = $this->redirectUri;
        $param = array(
            'grant_type' => 'authorization_code',
            'client_id' => $this->appkey,
            'client_secret' => $this->secretKey,
            'code' => $code,
            'redirect_uri' => $redirectUri,
            'scope' => 'read',
            'state' => $this->mkCsrf(self::CSRF_TOKEN),
        );
        $json = $this->curl($this->tokenUrl, $param);
        $json =  mb_convert_encoding($json, "UTF-8", "GBK");
        $json = json_decode($json);
        try {
            if (isset($json->code) && isset($json->error_description)) {
                throw new Jos_Api_Exception($json->error_description, array('level' => "error", 'tags' => 'jos', 'code' => intval($json->code)));
            }
        } catch (Exception $e) {
            Kohana::$log->add(Log::ERROR, Kohana_Kohana_Exception::text($e));
        }
        return $json;
    }

    /**
     * 重新生成csrf
     *
     * @param unknown $key
     * @return string
     */
    public function mkCsrf($key)
    {
        // TODO
        // $v = uniqid('', true);
        // $_SESSION['jos_' . $key] = $v;
        return '';
    }

    /**
     * 验证csrf正确性，单次验证
     *
     * @param unknown $key
     * @param unknown $value
     * @return boolean
     */
    public function checkCsrf($key, $value)
    {
        // $v = $_SESSION['jos_' . $key];
        // $r = $v ? $v === $value : false;
        // unset($_SESSION['jos_' . $key]);
        // TODO
        return true;
    }

    /**
     * object_to_array
     *
     * @param $stdclassobject
     * @return array
     */
    public function std_class_object_to_array($stdclassobject)
    {
        $_array = is_object($stdclassobject) ? get_object_vars($stdclassobject) : $stdclassobject;
        foreach ($_array as $key => $value) {
            $value = (is_array($value) || is_object($value)) ? std_class_object_to_array($value) : $value;
            $array[$key] = $value;
        }
        return $array;
    }
}
