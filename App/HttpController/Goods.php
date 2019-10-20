<?php


namespace App\HttpController;


use EasySwoole\Http\AbstractInterface\Controller;

class Goods extends Controller
{

    function index()
    {
        echo 'test';
    }

    public function search()
    {

    }

    protected function actionNotFound(?string $action)
    {
        $this->response()->withStatus(404);
        $file = EASYSWOOLE_ROOT.'/vendor/easyswoole/easyswoole/src/Resource/Http/404.html';
        if(!is_file($file)){
            $file = EASYSWOOLE_ROOT.'/src/Resource/Http/404.html';
        }
        $this->response()->write(file_get_contents($file));
    }
}