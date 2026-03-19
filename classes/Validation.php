<?php

class Validation
{
    public $validations = [];
    
    static function validate($rules, $datas)
    {

        $validation = new self;

        foreach ($rules as $field => $rulesField) {

            foreach ($rulesField as $rule) {

                $valueField = $datas[$field];
                if ($rule == 'confirmed') {
                    $validation->$rule($field, $valueField, $datas["confirmed_{$field}"]);
                } else if (str_contains($rule, ':')) {

                    $temp = explode(':', $rule);
                    $rule = $temp[0];
                    $ruleEX = $temp[1];
                    $validation->$rule($ruleEX, $rule, $valueField);
                } else {
                    $validation->$rule($field, $valueField);
                }
            }
            return $validation;
        }
    }
    private function unique($table, $field, $value)
    {
        if (strlen($value) == 0) {
            return;
        }
        $db = new Database(config('database'));

        $result = $db->query(
            query: "select * from $table where $field = :value ",
            params: ['value' => $value]
        )->fetch();
        if ($result) {
            $this->validations[] = "O {$field} já esta cadastrado, crie um diferente";
        }
    }
    private function require($field, $value)
    {
        if (strlen($value) <= 0) {
            $this->validations[] = "{$field} precisa ser informado! ";
        }
    }
    private function email($field, $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->validations[] = "O {$field} precisa de um valor valido!";
        }
    }
    private function confirmed($field, $value, $confirmValue)
    {
        if ($value = ! $confirmValue) {
            $this->validations[] = "Algo esta errado em {$field}, favor validar novamente...";
        }
    }
    private function requirements($value, $field)
    {

        if (!str_contains($value, "!!#$%&'()*+,-./:;<=>?@[\]^_`{|}~")) {
            $this->validations[] = "A $field requer caracteres especiais";
        }
    }
    private function min($value, $field)
    {
        if ($value > 8) {
            $this->validations[] = "A $field precisa ter mais que 8 caracteres ";
        }
    }
    private function max($value, $field)
    {
        if ($value < 30) {
            $this->validations[] = "A $field precisa ter menos que 30 caracteres ";
        }
    }
    private function cpf($value, $field){
        if($value > 11){
            $this->validations[] = "O $field não pode passar de 11 caracteres";
        }
    }
    public function  validateFailed($pending = null) {

        $key = 'validations';

        if($pending){
            $key .= '_'. $pending;
        }

        flash()->push($key, $this->validations);

        return sizeof($this->validations) > 0;
    }
}
