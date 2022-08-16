<?php
/**
 * Created by PhpStorm.
 * User: rawan
 * Date: 2/26/2019
 * Time: 10:09 AM
 */

class Guest extends CI_Model {
    private $guest_id,$wedding_id,$table_id	,$guest_name,$relationship,$priority,$groom_bride,$guest_age,$gender;

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getGuestId()
    {
        return $this->guest_id;
    }

    /**
     * @param mixed $guest_id
     */
    public function setGuestId($guest_id)
    {
        $this->guest_id = $guest_id;
    }

    /**
     * @return mixed
     */
    public function getWeddingId()
    {
        return $this->wedding_id;
    }

    /**
     * @param mixed $wedding_id
     */
    public function setWeddingId($wedding_id)
    {
        $this->wedding_id = $wedding_id;
    }

    /**
     * @return mixed
     */
    public function getTableId()
    {
        return $this->table_id;
    }

    /**
     * @param mixed $table_id
     */
    public function setTableId($table_id)
    {
        $this->table_id = $table_id;
    }

    /**
     * @return mixed
     */
    public function getGuestName()
    {
        return $this->guest_name;
    }

    /**
     * @param mixed $guest_name
     */
    public function setGuestName($guest_name)
    {
        $this->guest_name = $guest_name;
    }

    /**
     * @return mixed
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * @param mixed $relationship
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;
    }

    /**
     * @return mixed
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param mixed $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    /**
     * @return mixed
     */
    public function getGroomBride()
    {
        return $this->groom_bride;
    }

    /**
     * @param mixed $groom_bride
     */
    public function setGroomBride($groom_bride)
    {
        $this->groom_bride = $groom_bride;
    }

    /**
     * @return mixed
     */
    public function getGuestAge()
    {
        return $this->guest_age;
    }

    /**
     * @param mixed $guest_age
     */
    public function setGuestAge($guest_age)
    {
        $this->guest_age = $guest_age;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }


}