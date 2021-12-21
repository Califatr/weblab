<?php


namespace Entity\User;

use Service\DatabaseService;

class UserCreate
{
    private string $name;
    private string $email;
    private string $phone;
    private string $password;

    public function __construct(array $data)
    {
        self::setFirstName($data['name']);
        self::setEmail($data['email']);
        self::setPhone($data['phone']);
        self::setPassword($data['password']);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $firstName): void
    {
        $this->name = $firstName;
    }


    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getPassword(): string
    {
        return $this->password;
    }


    public function setPassword(string $password): void
    {
        $this->password = (string)password_hash($password, PASSWORD_DEFAULT);
    }

    public function create(): int
    {
        $sql = "insert into account (name, email, phone, password) values (:name, :email, :phone, :password) returning id";
        $db = new DatabaseService();
        $result = $db->execSql($sql, self::getData());
        if (count($result) == 1) {
            return $result[0]['id'];
        }
        return -1;
    }

    private function getData(): array
    {
        $result = [];
        $result['name'] = self::getName();
        $result['email'] = self::getEmail();
        $result['phone'] = self::getPhone();
        $result['password'] = self::getPassword();
        return $result;
    }
}
