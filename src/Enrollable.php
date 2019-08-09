<?php
namespace Thiagoprz\SimpleRole;

/**
 * Trait Enrollable
 * @package Thiagoprz\SimpleRole
 */
trait Enrollable
{

    /**
     * Adds role as a fillable attribute
     */
    public function initializeEnrollable()
    {
        $this->fillable[] = 'role';
    }

    /**
     * Setting a role
     *
     * @param string $role
     */
    public function setRole(string $role)
    {
        $this->update(['role' => $role]);
    }

}