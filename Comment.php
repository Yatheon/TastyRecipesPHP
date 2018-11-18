<?php

class Comment
{

    private $USERNAME;
    private $comment;
    private $timestamp;
    private $created;
    private $deleted;

    public function __construct($USERNAME, $comment)
    {
        $this->USERNAME = $USERNAME;
        $this->comment = $comment;
        $this->timestamp = time();
        $this->created = date("Y-m-d H:i");
        $this->deleted = false;
    }

    /**
     * @return string The author's nick name.
     */
    public function getUsername()
    {
        return $this->USERNAME;
    }

    /**
     * @return string The message.
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return int The time (on the server) when this entry was created.
     */
    public function getTime()
    {
        return $this->timestamp;
    }

    /**
     * @return The date and time when the comment was created in Y-m-d H:i format.
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return boolean True if the entry has been deleted.
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param boolean $deleted Set to true if the entry shall be deleted.
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

}
