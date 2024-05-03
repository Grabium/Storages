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

  //$size = Storage::size('file.jpg');
  //$time = Storage::lastModified('file.jpg');
  //$mime = Storage::mimeType('file.jpg');
  //$path = Storage::path('file.jpg'); 

  /*path():
   caso use localdriver, isso retornará o caminho absoluto para o arquivo. 
   Caso use s3driver, este método retornará o caminho relativo ao arquivo no intervalo S3: 
  */

  /*
  Storage::copy('old/file.jpg', 'new/file.jpg');

  Storage::move('old/file.jpg', 'new/file.jpg');
  */

  /*
  $path = $request->file('avatar') //busca arquivo com esse input na requisição
    ->storeAs(                     //salva
      'avatars',                   //subpasta diretório
      'arquivo.txt',               //nome
      $disk                        //disk (opcional)
  );
  */

  /*
  $file = $request->file('avatar');

  $name = $file->getClientOriginalName();
  $extension = $file->getClientOriginalExtension();

  OU (mais aconselhavel, pois arquivo e a extensão podem ser adulterados por um usuário mal-intencionado.)

  $name = $file->hashName(); // Generate a unique, random name...
  $extension = $file->extension(); // Determine the file's extension based on the file's MIME type...
  */
  
}
