<?php

abstract class TeamMember
{
    private int $id;
    private string $username;
    private string $email;
    private int $teamId;
    private DateTime $createdAt;
    private string $password;


    public function __construct($username, $email, $password, $teamId, $id = null)
    {
        $this->username = $username;
        $this->email = $email;
        $this->setPassword($password);
        $this->teamId = $teamId;
        $this->id = $id;
        $this->createdAt = new DateTime();
    }

    public function Getid() { return $this->id ;}
    public function GetUserName() { return $this->username ;}
    public function GetEmail() { return $this->email ;}
    public function GetTeamID() { return $this->teamId ;}
    public function GetCreateDate() { return $this->createdAt ;}

    abstract public function canCreateProject();
    abstract public function canAssignTasks();
    abstract public function getRolePermissions();

    public function verifyPassword($password) 
    {
        if (password_verify($password , $this->password)) {return true;} return false; 
    }
    public function setPassword($password) 
    { $this->password = password_hash($password, PASSWORD_DEFAULT);;}
}