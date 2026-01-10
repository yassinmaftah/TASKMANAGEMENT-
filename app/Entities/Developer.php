<?php
require_once __DIR__ . '/../Entities/TeamMember.php';
class Developer extends TeamMember
{
    public function canCreateProject(){return false;}
    public function canAssignTasks(){return false;}
    public function getRolePermissions(){return ['read_tasks', 'edit_task_status'];}
}
?>