<?php

class PessoaModel
{
    public $pessoa_codigo, $pessoa_nome;

    public $rows;

    public function insert()
    {
        include 'DBC/PessoaDBC.php';

        $DBC = new PessoaDBC();

        $DBC->insert($this);

    }

    public function update()
    {
        include 'DBC/PessoaDBC.php';

        $DBC = new PessoaDBC();

        $DBC->update($this);
    }

    public function delete()
    {
        include 'DBC/PessoaDBC.php';

        $DBC = new PessoaDBC();

        $DBC->delete($this);
    }

    public function getAllRows()
    {
        include 'DBC/PessoaDBC.php';

        $DBC = new PessoaDBC();

        $this->rows = $DBC->select(); 
    }
}