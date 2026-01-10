<?php

class BugTask extends Task 
{
    public function calculateComplexity() 
    {
        if ($this->priority === 'critical')
            return "High";
        return "Low";
    }
    public function getRequiredSkills() {return ['Debugging', 'Testing', 'Log Analysis'];}
}