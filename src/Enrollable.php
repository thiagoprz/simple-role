<?php
namespace Thiagoprz\SimpleRole;

/**
 * Trait Enrollable
 * @package Thiagoprz\SimpleRole
 * @property string $role
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
     * Sets a role
     *
     * @param string $role
     * @return bool
     */
    public function setRole(string $role): bool
    {
        $this->role = $role;
        return $this->save();
    }

}