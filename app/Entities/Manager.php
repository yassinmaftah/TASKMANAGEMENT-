<?php

class Manager extends TeamMember
{
    public function canCreateProject(){return true;}
    public function canAssignTasks(){return true;}
    public function getRolePermissions(){return ['create_project', 'assign_tasks'];} 
}
?>