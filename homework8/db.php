<?php

class StudentService
{
    private $db;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=127.0.0.1;dbname=homework', 'root', 'root', array(
            PDO::ATTR_PERSISTENT => true
        ));
    }

    private function print(string $where = null, string $order = null)
    {
        $string = 'SELECT * from clients';
        if(!is_null($where)) {
            $string .= ' WHERE ' . $where;
        }
        if(!is_null($order)) {
            $string .= ' ORDER BY ' . $order;
        }
        foreach($this->db->query($string) as $row) {
            printf('id: %s, age: %s, name: %s, activity: %s;', $row['id'], $row['age'], $row['name'], $row['is_active']);
            echo '<br>';
        }
    }

    public function printAllClients()
    {
        $this->print();
    }

    public function printActiveClients()
    {
       $this->print('is_active=1');
    }

    public function printClientsOver30()
    {
        $this->print('age>=30');
    }

    public function printClientsWithV()
    {
        $this->print('name LIKE \'V%\'');
    }

    public function printOldestClient()
    {
        $this->print('age = (SELECT max(age) FROM clients)');
    }

    public function printSortedByAge()
    {
        $this->print(null, 'age DESC');
    }

    public function printSortedByName()
    {
        $this->print(null, 'name ASC');
    }

    public function getCount(string $where = null): int
    {
        $string = 'SELECT COUNT(*) FROM clients';
        if(!is_null($where)) {
            $string .= ' WHERE ' . $where;
        }
        return $this->db->query($string)->fetch()['COUNT(*)'];
    }

    public function getActiveCount(): int
    {
        return $this->getCount('is_active=1');
    }

    public function getActiveCountOver25(): int
    {
        return $this->getCount('age>25 AND is_active=1');
    }

    public function insertClient(string $name, int $age, int $activity)
    {
        $string = 'INSERT INTO clients(age, name, is_active) VALUES (' . $age . ',\'' . $name . '\',' . $activity . ')';
        $this->db->query($string);
    }

    public function updateClient($id, array $array)
    {
        $string =  '';
        foreach($array as $key=>$value) {
            if(!empty($string)) {
                $string .= ', ';
            }
            $string .= $key . '=' . '\'' . $value . '\'';
        }
        $string = 'UPDATE clients SET ' . $string . ' WHERE id=' . $id;
        $this->db->query($string);
    }

    public function deleteInactiveClients()
    {
        $this->db->query('DELETE FROM clients WHERE is_active=0');
    }

    public function deleteAll()
    {
        $this->db->query('DELETE FROM clients');
    }
}

$service = new StudentService();
//$service->updateClient(9, [
//    'age' => 24,
//]);
