<?php

use System\View;
use Models\Pochta;


class homeController
{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new Pochta();
    }

    public function actionMain()
    {
        $data = $this->model->displayAll();
        View::render('index', [
            'data' => $data,
        ]);
    }

    public function actionDelete()
    {
        View::render('del');
    }

    public function actionUpdate()
    {
        View::render('edit');
    }

    public function actionDel()
    {
        $this->model->del();
    }

    public function actionAddPage()
    {
        View::render('add');
    }
    public function actionAdd()
    {
        $this->model->add();
    }
    public function actionUpd()
    {
        $this->model->upd();

    }
}