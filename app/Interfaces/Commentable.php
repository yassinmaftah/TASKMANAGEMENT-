<?php

interface Commentable
{
    public function addComment($comment);
    public function getComments();
}