<?php

if (!function_exists('checkPermission')) {

  /**
   * Check permission from current user
   *
   * @param string $permission
   * @return bool
   */
  function checkPermission($permission)
  {
    return auth()->user()->hasPermissionTo($permission);
  }
}

if (!function_exists('checkPermissions')) {

  /**
   * Check permissions from current user
   *
   * @param array $permissions
   * @return bool
   */
  function checkPermissions($permissions)
  {
    return auth()->user()->hasAnyPermission($permissions);
  }
}
