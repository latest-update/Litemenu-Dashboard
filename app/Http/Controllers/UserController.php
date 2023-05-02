<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users(Request $request)
    {
        return User::query()
            ->select('id', 'fullname', 'email')
            ->orderBy('fullname')
            ->when(
                $request->search,
                fn (Builder $query) => $query
                    ->where('fullname', 'like', "%{$request->search}%")
                    ->orWhere('email', 'like', "%{$request->search}%")
            )
            ->when(
                $request->exists('selected'),
                fn (Builder $query) => $query->whereIn('id', $request->input('selected', [])),
                fn (Builder $query) => $query->limit(10)
            )
            ->get();
    }
}
