<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return Room::all();
    }
}
