<?php


class baseAccount
{
    protected $role;
    protected $department;

    public function __construct($role, $department)
    {
        $this->role = $role;
        $this->department = $department;
    }

    public function getDepartment()
    {
        return $this->department;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function setDepartment($newDepartment)
    {
        $this->department = $newDepartment;
    }


}

class UserAccount extends baseAccount
{
    public function __construct($role)
    {
        $department = $role . 's';
        parent::__construct($role, $department);
    }
}

class AdminAccount extends baseAccount
{
    public function __construct($role)
    {
        $department = $role . 's';
        parent::__construct($role, $department);
    }

    public function getDepartment()
    {
        return strtoupper($this->department);
    }
}

$userAccount = new UserAccount('user');
echo sprintf('User role: %s, department: %s', $userAccount->getRole(), $userAccount->getDepartment()) . '<br>';
$adminAccount = new AdminAccount('admin');
echo sprintf('User role: %s, department: %s', $adminAccount->getRole(), $adminAccount->getDepartment()) . '<br>';