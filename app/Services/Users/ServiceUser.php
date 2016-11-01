<?php
/**
 * Created by PhpStorm.
 * User: IncludeTecnologia
 * Date: 03/10/2016
 * Time: 16:31
 */
namespace  App\Services\Users;

use App\Repositories\UserRepository;

class ServiceUser
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * ServiceUser constructor.
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @return UserRepository
     */
    public function getUserRepository()
    {
        return $this->userRepository;
    }
    public function all()
    {
        return $this->getUserRepository()->paginate(10);
    }
    public function show($id)
    {
        return $this->getUserRepository()->find($id);
    }
    public function create($data)
    {
        return $this->getUserRepository()->create($data);
    }
    public function update($data, $id)
    {
        return $this->getUserRepository()->update($data, $id);
    }
    public function delete($id)
    {
        return $this->getUserRepository()->delete($id);
    }
    public function userLists()
    {
        return $this->getUserRepository()->all()->pluck('name','id');
    }

}