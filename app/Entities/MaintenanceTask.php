<?php

class MaintenanceTask extends Task 
{
    public function calculateComplexity() {return "Low";}
    public function getRequiredSkills() {return ['Database Backup', 'Server Config', 'Scripting'];}
}