<?php
/**
 * This file is part of EasySwoole.
 *
 * @link https://www.easyswoole.com
 * @document https://www.easyswoole.com
 * @contact https://www.easyswoole.com/Preface/contact.html
 * @license https://github.com/easy-swoole/easyswoole/blob/3.x/LICENSE
 */
declare(strict_types=1);

namespace EasySwoole\Db\Query;

use EasySwoole\Spl\SplBean;

class Config extends SplBean
{
    /**
     * 数据库服务器地址
     * @var string
     */
    protected $host; // 数据库服务器地址
    protected $user; // 用户名
    protected $password; // 密码
    protected $database; // 数据库名
    protected $port = 3306; // 端口
    protected $timeout = 30; // 建立连接超时时间，仅影响connect超时时间
    protected $charset = 'utf8'; // 数据库编码默认采用utf8
    protected $strict_type = false; // 默认不开启严格模式，开启时query方法返回的数据将转为强类型
    protected $fetch_mode = false; // 默认不开启fetch模式, 开启时可与pdo一样使用fetch/fetchAll逐行或获取全部结果集(4.0版本以上)
    protected $maxReconnectTimes = 3;

    /**
     * 设置数据库服务器地址
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * 设置数据库服务器地址
     * @param mixed $host
     */
    public function setHost(string $host)
    {
        $this->host = $host;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * @param mixed $database
     */
    public function setDatabase($database)
    {
        $this->database = $database;
    }

    /**
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param int $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /**
     * @return int
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @param int $timeout
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
    }

    /**
     * @return string
     */
    public function getCharset()
    {
        return $this->charset;
    }

    /**
     * @param string $charset
     */
    public function setCharset($charset)
    {
        $this->charset = $charset;
    }

    /**
     * @return bool
     */
    public function isStrictType()
    {
        return $this->strict_type;
    }

    /**
     * @param bool $strict_type
     */
    public function setStrictType($strict_type)
    {
        $this->strict_type = $strict_type;
    }

    /**
     * @return bool
     */
    public function isFetchMode()
    {
        return $this->fetch_mode;
    }

    /**
     * @param bool $fetch_mode
     */
    public function setFetchMode($fetch_mode)
    {
        $this->fetch_mode = $fetch_mode;
    }

    /**
     * @return int
     */
    public function getMaxReconnectTimes()
    {
        return $this->maxReconnectTimes;
    }

    /**
     * @param int $maxReconnectTimes
     */
    public function setMaxReconnectTimes($maxReconnectTimes)
    {
        $this->maxReconnectTimes = $maxReconnectTimes;
    }
}
