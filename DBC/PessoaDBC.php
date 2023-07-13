<?php

class PessoaDBC
{
    private $conection;

    public function __construct()
    {
       $dsn = 'mysql:host=localhost;dbname=crud';

       $this->conection = new PDO($dsn, 'root', '');
    }

    public function insert(PessoaModel $model)
    {
        $sql = "INSERT INTO pessoa (pessoa_nome) VALUES (:nome)";

        $stmt = $this->conection->prepare($sql);

        $stmt->bindValue(':nome', $model->pessoa_nome);

        $stmt->execute();
    }

    public function update(PessoaModel $model)
    {
        $sql = "UPDATE pessoa SET pessoa_nome = :nome WHERE pessoa_codigo = :codigo";

        $stmt = $this->conection->prepare($sql);

        $stmt->bindValue(':nome', $model->pessoa_nome);

        $stmt->bindValue(':codigo', $model->pessoa_codigo);

        $stmt->execute();
    }

    public function delete(PessoaModel $model)
    {
        $sql = "DELETE FROM pessoa WHERE pessoa_codigo = :codigo";

        $stmt = $this->conection->prepare($sql);

        $stmt->bindValue(':codigo', $model->pessoa_codigo);

        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM pessoa";

        $stmt = $this->conection->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}