<?php

namespace App\Repositories\User;

use App\Repositories\RepositoryInterface;

/**
 * The repository interface for the User Model
 */
interface UserRepositoryInterface extends RepositoryInterface
{
  /**
   * Return all user models with roles (Eager Loading)
   */
  public function allWithRoles();
}
