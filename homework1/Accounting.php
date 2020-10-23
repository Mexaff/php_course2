<?php


class Accounting
{
    public $users = [];

    public function addUser(array $user)
    {
        $this->users[$user['accNumber']]=$user;
    }

    public function delUser(string $accNumber)
    {
        unset($this->users[$accNumber]);
    }

    public function editUser(string $accNumber, array $user)
    {
        if(!is_null($user['name'])) {
            $this->users[$accNumber]['name'] = $user['name'];
        }
        if(!is_null($user['surname'])) {
            $this->users[$accNumber]['surname'] = $user['surname'];
        }
        if(!is_null($user['salary'])) {
            $this->users[$accNumber]['salary'] = $user['salary'];
        }
        if(!is_null($user['taxes'])) {
            $this->users[$accNumber]['taxes'] = $user['taxes'];
        }
    }

    public function taxes()
    {
        $taxes = 0;
        $temp = array_keys($this->users);
        foreach ($temp as $value) {
            var_dump($value);
            $taxes += $this->users[$value]['taxes'];
        }
        echo 'Summary taxes = ' . $taxes . '<br>';
    }
}