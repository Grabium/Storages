<?php

namespace App\Http\Controllers\Storages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RecuperarArquivosController extends Conteudos_dos_exemplos
{

  public function recuperarArquivos(string $diskForSearch = 'local')
  {
    //a partir de \storage\app caso o $diskForSearch == 'local'.
    //acho que só é possível recuperar arquivos do disco de configuração

    $customContent = Storage::disk($diskForSearch)->get($this->nomeDoArquivoComExtensao);

    return $customContent;
  }

  public function testarExistenciaDeArquivo()
  {
    require_once 'conteudos_dos_exemplos.php';
    
    if (Storage::disk('newDisk')->exists($this->nomeDoArquivoComExtensao)) {
      
      //return $this->recuperarArquivos('newDisk');
      return $this->baixarArquivo();
    
    }elseif(Storage::disk('newDisk')->missing($this->nomeDoArquivoComExtensao)){

      return 'arquivo não encontrado';
    }
    
  }

  public function baixarArquivo()
  {
    return Storage::disk('newDisk')->download($this->nomeDoArquivoComExtensao);
  }
}
