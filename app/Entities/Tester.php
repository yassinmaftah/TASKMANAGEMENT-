<?php

class Tester extends TeamMember
{
    public function canCreateProject(){return false;}
    public function canAssignTasks(){return false;}
    public function getRolePermissions(){return ['test_tasks', 'review_tasks'];}
}
?>