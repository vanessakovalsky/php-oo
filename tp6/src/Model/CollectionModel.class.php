<?php


class CollectionModel {

  private $uid;
  private $jid;
  private $statut;
  private $prete_a;




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
     * Get the value of Statut
     *
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set the value of Statut
     *
     * @param mixed statut
     *
     * @return self
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get the value of Prete a
     *
     * @return mixed
     */
    public function getPreteA()
    {
        return $this->prete_a;
    }

    /**
     * Set the value of Prete a
     *
     * @param mixed prete_a
     *
     * @return self
     */
    public function setPreteA($prete_a)
    {
        $this->prete_a = $prete_a;

        return $this;
    }

}
