<?php 

class PessoaController
{
    public static function index()
    {
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();
        $model->getAllRows();

        include 'View/modules/Pessoa/ListaPessoa.php';
    }

    public static function form()
    {
        include 'View/modules/Pessoa/FormPessoa.php';
    }

    public static function insert()
    {
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();
        $model->pessoa_nome = $_POST['nome'];
        $model->insert();

        header('Location: /pessoa');
    }

    public static function update()
    {
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();
        $model->pessoa_codigo = $_POST['codigo'];
        $model->pessoa_nome = $_POST['nome'];
        $model->update();

        header('Location: /pessoa');
    }

    public static function delete()
    {
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();
        $model->pessoa_codigo = $_POST['codigo'];
        $model->delete();

        header('Location: /pessoa');
    }
}