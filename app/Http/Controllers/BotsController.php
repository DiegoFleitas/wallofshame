<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\BotsDataTable;

class BotsController extends Controller
{
    public function index(BotsDataTable $dataTable)
    {
        return $dataTable->render('bots.index');
    }
}
