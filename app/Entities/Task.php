<?php
require_once __DIR__ . '/../Interfaces/Assignable.php';
require_once __DIR__ . '/../Interfaces/Commentable.php';
require_once __DIR__ . '/../Interfaces/Prioritizable.php';

abstract class Task implements Assignable, Prioritizable, Commentable
{
    protected ?int $id;
    protected string $title;
    protected string $description;
    protected int $projectId;
    protected ?int $assigneeId;
    protected int $reporterId;
    protected string $priority;
    protected string $status;
    protected float $estimatedHours;
    protected float $actualHours;
    protected string $dueDate;
    protected DateTime $createdAt;
    protected DateTime $updatedAt;
    protected $comments = [];

    public function __construct(string $title, string $description, int $projectId, int $reporterId)
    {
        $this->title = $title;
        $this->description = $description;
        $this->projectId = $projectId;
        $this->reporterId = $reporterId;
        $this->status = 'todo';
        $this->priority = 'medium';
        $this->estimatedHours = 0.0;
        $this->actualHours = 0.0;
        $this->assigneeId = null;
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
    }

    public function addComment($comment) 
    {
        $this->comments[] = [
            'text' => $comment,
            'date' => new DateTime()
        ];
    }
    
    public function getComments() {return $this->comments;}

    public function getId() { return $this->id; }
    public function getTitle() { return $this->title; }
    public function getdescription() {return $this->description;}
    public function getassigneeId() { return $this->assigneeId; }
    public function getreporterId() { return $this->reporterId; }
    public function getStatus() { return $this->status; }
    public function getestimatedHours() { return $this->estimatedHours; }
    public function getactualHours() { return $this->actualHours; }
    public function getcreatedAt() { return $this->createdAt; }
    public function getupdatedAt() { return $this->updatedAt; }

    public function getAssignee() { return $this->assigneeId; }
    public function setAssignee($assigneeId) { $this->assigneeId = $assigneeId; }
    public function setStatus($status) { $this->status = $status; }
    abstract public function calculateComplexity();
    abstract public function getRequiredSkills();
}