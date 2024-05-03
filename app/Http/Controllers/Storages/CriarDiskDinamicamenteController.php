<?php

namespace App\Http\Controllers\Storages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CriarDiskDinamicamenteController extends Controller
{
  public function criarDiskDinamicamente(string $newDisk = 'disco_sobre_demanda')
  {
    include 'conteudos_dos_exemplos.php';
    
    $newDisk = Storage::build([
        'driver' => 'local',
        'root' => storage_path('pastas_de_discos_dinamicos/'.$newDisk),
    ]);

    $newDisk->put($nomeDoArquivoComExtensao, $conteudoOnDemandDisks);

    return 'disco criado dinamicamente e arquivo salvo a partir da instância de Storage::build. O objeto $newdisk.';
  }
}
