<?php

interface Prioritizable
{
    public function setPriority($level);
    public function getPriority();
}