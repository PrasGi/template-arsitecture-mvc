<?php

namespace Repository;

class UserRepository {

  public function __construct()
  {
    Connection::start();
  }

  public function fetch() :array{
    // manggil database
    return [
      [
        'name' => 'testing 1',
        'email' => 'testing@example.com',
        'password' => '123456'
      ],[
        'name' => 'testing 2',
        'email' => 'testing@example.com',
        'password' => '123456'
      ]
    ];
  }

  public function getById(string|int $id){
    return [];
  }

  public function create(array $data){
    return [];
  }

  public function update(string|int $id, array $data){
    return [];
  }

  public function delete(string|int $id){
    return [];
  }
}