<?php

class Administrator extends TeamMember
{
    public function canCreateProject(){return true;}
    public function canAssignTasks(){return true;}
    public function getRolePermissions(){return ['manage_teams', 'manage_members'];}
}
?>