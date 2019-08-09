<?php
namespace Thiagoprz\SimpleRole;

/**
 * Trait Enrollable
 * @package Thiagoprz\SimpleRole
 */
trait Enrollable
{

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