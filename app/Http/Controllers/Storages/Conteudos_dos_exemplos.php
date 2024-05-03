<?php

namespace App\Http\Controllers\Storages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Conteudos_dos_exemplos extends Controller
{
  
  public string $nomeDoArquivoComExtensao = 'example.txt';

  public string $conteudoLocal = 
  '"put(nome_do_arquivo, conteúdo_do_arquivo)" Faz o salvamento de acordo com o disk.
  Exemplo: Storage::disk("local")->put($nomeDoArquivoComExtensao, $conteudoLocal); 
  faz que seja salvo em :
  storage/storage_path("app")/$nomeDoArquivoComExtensao

  Disk   = local.
  Driver = local.
  Pasta padrão = \storage\app';

  public string $conteudoPublic = 
  '"put(nome_do_arquivo, conteúdo_do_arquivo)" Faz o salvamento de acordo com o disk.
  Exemplo: Storage::disk("public")->put($nomeDoArquivoComExtensao, $conteudoPublic); 
  faz que seja salvo em :
  storage/storage_path("app/public")/$nomeDoArquivoComExtensao
  Embora use o mesmo driver que o disk=>local (um driver chamado local), há uma possibilidade de 
  compartilhar o arquivo através de uma url.

  Disk   = public.
  Driver = local.
  Pasta padrão = \storage\app\public';

  public string $conteudoOnDemandDisks = 
    'Disco criado sobre demanda (dinamicamente).';





  
}
