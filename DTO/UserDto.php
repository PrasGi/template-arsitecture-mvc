<?php 

namespace Dto;

class UserDto {
  public ?string $name = '';
  public ?string $email = '';
  public ?string $password = '';

  public function __construct(?string $name, ?string $email, ?string $password)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  public function toArray(){
    return [
      'name' => $this->name,
      'email' => $this->email,
      'password' => $this->password
    ];
  }
}