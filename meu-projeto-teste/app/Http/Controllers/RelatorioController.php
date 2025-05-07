<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;

class RelatorioController extends Controller
{
    function emitirRelatorio() {
        $dompdf = new Dompdf();
        
        $dados = [
            'curso' => 'Análise e Desenvolvimento de Sistemas',
            'alunos' => ['joao', 'luana', 'russi'],
            'duracao' => 4
        ];

        $html = View::make('relatorio.curso', ['dados' => $dados])->render();

        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'landscape');

        $dompdf->render();

        $dompdf->stream();
    }
}
