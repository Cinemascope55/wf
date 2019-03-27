<?php


namespace Model;


class Role
{
    public const ROLE_USER = 'ROLE_USER';
    public const ROLE_ADMIN = 'ROLE_ADMIN';
    private $id;
    protected $label;

    /**
     * Role constructor.
     * @param $label
     */
    public function __construct(string $label)
    {
        $this->label = $label;
    }

    /* @return mixed */
    public function getId() : int
    {
        return $this->id;
    }

    /* @return mixed */
    public function getLabel(): string
    {
        return $this->label;
    }

    /* @param mixed $label @return Role */
    public function setLabel(string $label)
    {
        $this->label = $label;
        return $this;
    }

    public function getRoles()
    {}


}