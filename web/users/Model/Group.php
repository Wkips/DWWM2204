<?php
/**
 *represente un groupe users 
 *
 */
class Group
{
    public int $group_id;

    public string $group_name;


}

class User
{
    public int $user_id;
    public string $user_name;
    public string $user_email;
    public string $user_pass;
 
}