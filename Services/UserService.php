<?php

namespace Services;

use DTO\UserDto;
use Repository\UserRepository;

class UserService
{
  private UserRepository $userRepository;

  public function __construct(UserRepository $userRepository)
  {
    $this->userRepository = $userRepository;
  }

  public function getAllUser($data = null)
  {
    try {
      // do logic if you have any logic
      $datas = $this->userRepository->fetch($data);
      $users = null;

      foreach ($datas as $data) {
        $users[] = new UserDto(
          name: $data['name'],
          email: $data['email'],
          password: $data['password']
        );
      }

      return $users;
    } catch (\Throwable $th) {
      // do log
      throw new \Exception($th->getMessage());
    }
  }

  public function getUserById($id)
  {
    // do logic if you have any logic
    return $this->userRepository->getById($id);
  }

  public function createUser(UserDto $userDto)
  {
    // do logic if you have any logic
    return $this->userRepository->create($userDto->toArray());
  }

  public function updateUser($id, $data)
  {
    // do logic if you have any logic
    return $this->userRepository->update($id, $data);
  }

  public function deleteUser($id)
  {
    // do logic if you have any logic
    return $this->userRepository->delete($id);
  }
}
