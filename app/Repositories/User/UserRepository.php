<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * The repository for User Model
 */
class UserRepository extends BaseRepository implements UserRepositoryInterface
{
  /**
   * @inheritdoc
   */
  protected $model;

  /**
   * @inheritdoc
   */
  public function __construct(User $model)
  {
    $this->model = $model;
    parent::__construct($model);
  }

  /**
   * @inheritdoc
   */
  public function allWithRoles()
  {
    return $this->model->with('roles')->get();
  }

  /**
   * @inheritdoc
   */
  public function create($data)
  {
    try {
      DB::beginTransaction();

      $data['password'] = Hash::make($data['password']);

      $user = $this->model->create($data);

      $user->assignRole($data['role']);

      DB::commit();

      return true;
    } catch (\Exception $e) {
      DB::rollBack();
      return false;
    }
  }

  /**
   * @inheritdoc
   */
  public function update($model, $data)
  {
    try {
      DB::beginTransaction();

      $user = $model->update($data);

      $model->syncRoles([$data['role']]);

      DB::commit();

      return $user;
    } catch (\Exception $e) {
      DB::rollBack();
      return false;
    }
  }
}
