<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        echo view("admin/header_view");
        echo view("admin/dashboard_view");
        echo view("admin/footer_view");
    }
}
