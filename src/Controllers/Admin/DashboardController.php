<?php

namespace Power\Computer\Controllers\Admin;

use Power\Computer\Commons\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // $account['accounts'] = $_SESSION['user'];
        return $this->renderViewAdmin('dashboard');
    }
}
