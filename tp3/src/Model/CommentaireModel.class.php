<?php

class CommentaireModel {

  private $jid;
  private $uid;
  private $comment;
  private $date;

  


    /**
     * Get the value of Jid
     *
     * @return mixed
     */
    public function getJid()
    {
        return $this->jid;
    }

    /**
     * Set the value of Jid
     *
     * @param mixed jid
     *
     * @return self
     */
    public function setJid($jid)
    {
        $this->jid = $jid;

        return $this;
    }

    /**
     * Get the value of Uid
     *
     * @return mixed
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set the value of Uid
     *
     * @param mixed uid
     *
     * @return self
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get the value of Comment
     *
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set the value of Comment
     *
     * @param mixed comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get the value of Date
     *
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of Date
     *
     * @param mixed date
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

}
