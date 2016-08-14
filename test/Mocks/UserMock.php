<?php

namespace SimpleRestAuthTest\Mocks;

class UserMock implements \SimpleRestAuth\IUser{
    
    public function getGroups() {
        return [];
    }

    public function getLogin() {
        return 'test';
    }

    public function getToken() {
        return 'DKS827HDKLSC782';
    }

    public function getTokenDateExpired() {
        
    }

    public function getUserId() {
        return 1;
    }

    public function setToken($token) {
        
    }

}