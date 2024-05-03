<?php

namespace App\Http\Controllers\Storages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DriverLocalController extends Controller
{
  
  public function criarTxtEmStorageApp()
  {
    
    include 'conteudos_dos_exemplos.php';

    //---------salvando
    Storage::disk('newDisk')->put($nomeDoArquivoComExtensao, 'new disk');//disco customizado na configuração.
    //Storage::disk('local')->put($nomeDoArquivoComExtensao, $conteudoLocal);
    //Storage::disk('public')->put($nomeDoArquivoComExtensao, $conteudoPublic);
    return 'Arquivos salvos.';
  }

  
  
}
