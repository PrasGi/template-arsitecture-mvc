<?php 

namespace Controllers;

use Repository\UserRepository;
use Services\UserService;

class UserController {
  private UserService $userService;
  public function __construct()
  {
    $this->userService = new UserService(new UserRepository());
  }

  public function index()
  {
    return [
      'status_code' => 200,
      'message' => 'Succes get all datas',
      'data' => $this->userService->getAllUser()
    ];
  }

  public function show($id)
  {
    echo 'UserController show';
  }

  public function create()
  {
    echo 'UserController create';
  }

  public function update($id)
  {
    echo 'UserController update';
  }

  public function delete($id)
  {
    echo 'UserController delete';
  }
}