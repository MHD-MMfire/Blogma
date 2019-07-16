<?php


class User_model extends CRUD_model
{
    protected $_table = 'user';
    protected $_primary_key = 'user_id';

    public function exist($user, $hashed_pass)
    {

    }
}