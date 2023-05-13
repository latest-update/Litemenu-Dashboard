<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TableController extends Controller
{
    public function downloadQr(Table $table)
    {
        $qr = QrCode::format('png')->color(31, 66, 44)->size(300)->generate(URL::to('/table/'.$table->uuid));
        $headers = [
            'Content-Type' => 'image/png',
            'Content-Disposition' => "attachment; filename=$table->internal_id($table->uuid).png",
        ];
        return response($qr, 200, $headers);
    }
}
