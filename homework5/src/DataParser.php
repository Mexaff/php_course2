<?php


namespace QuizProcessing;

use Exception;
use QuizProcessing\Struct\Factory\StructFactory;
use QuizProcessing\Struct\Teacher;
use QuizProcessing\Struct\Student;
use QuizProcessing\Struct\Guest;

class DataParser
{
    private $data;
    private $jsonFile;
    private $teachers = [];
    private $guests = [];
    private $students = [];

    public function __construct(string $jsonFile)
    {
        if (!file_exists($jsonFile)) {
            throw new Exception('File not exists');
        }
        $this->jsonFile = $jsonFile;
    }

    public function process()
    {
        try {
            $this->loadJson();

            foreach ($this->data as $item) {
                $struct = StructFactory::create($item['type']);
                if ($struct instanceof Student) {
                    $temp = new Student();
                    $temp->first_name = $item['first_name'];
                    $temp->last_name = $item['last_name'];
                    $temp->email = $item['email'];
                    $temp->name = $item['name'];
                    $temp->type = $item['type'];
                    $temp->address = $item['address'];
                    $this->students[] = $temp;
                } elseif ($struct instanceof Teacher) {
                    $temp = new Teacher();
                    $temp->first_name = $item['first_name'];
                    $temp->last_name = $item['last_name'];
                    $temp->email = $item['email'];
                    $temp->name = $item['name'];
                    $temp->type = $item['type'];
                    $temp->address = $item['address'];
                    $this->teachers[] = $temp;
                } elseif ($struct instanceof Guest) {
                    $temp = new Guest();
                    $temp->first_name = $item['first_name'];
                    $temp->last_name = $item['last_name'];
                    $temp->email = $item['email'];
                    $temp->name = $item['name'];
                    $temp->type = $item['type'];
                    $temp->address = $item['address'];
                    $this->guests[] = $temp;
                } else {
                    $exception = new Exception('Invalid type');
                }

            }
            $array = array_merge($this->students, $this->guests, $this->teachers);

            return $array;
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }

    private function loadJson()
    {
        $json = file_get_contents($this->jsonFile);

        $data = json_decode($json, true);
        if ($data === null) {
            throw new Exception('Invalid json file');
        }
        $this->data = $data;
    }
}