<?php

namespace MB\SimpleRestAuth;

/**
 *
 * @author mickael
 */
interface IUser {
    
    /**
     * @return integer
     */
    public function getUserId();
    
    /**
     * @return string
     */
    public function getLogin();
    
    /**
     * @return string
     */
    public function getToken();
    
    /**
     * @return \Datetime
     */
    public function getTokenDateExpired();
    
    /**
     * @return array Authorization\IGroup
     */
    public function getGroups();
    
    public function setToken($token);
}
