<?php

namespace App\Http\Controllers\Storages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DriverLocalController extends Conteudos_dos_exemplos
{
  
  public function criarTxtEmStorageApp()
  {
    //---------salvando
    Storage::disk('newDisk')->put($this->nomeDoArquivoComExtensao, $this->arquivoDoNewDisk);//disco customizado na configuração.
    //Storage::disk('local')->put($this->nomeDoArquivoComExtensao, $this->conteudoLocal);
    //Storage::disk('public')->put($this->nomeDoArquivoComExtensao, $this->conteudoPublic);
    return 'Arquivos salvos.';
  }

  
  
}
