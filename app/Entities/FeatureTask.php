<?php

require_once __DIR__ . '/Task.php';
class FeatureTask extends Task
{
    public function calculateComplexity() {return ($this->estimatedHours > 20) ? "High" : "Medium";}
    public function getRequiredSkills() {return ['PHP', 'Architecture', 'System Design'];}
    public function setPriority($level) { ;}
    public function getPriority() { ;}
}