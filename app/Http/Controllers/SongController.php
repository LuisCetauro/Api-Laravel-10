<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Album;
use App\Http\Resources\SongResource;

class SongController extends Controller
{
    public function TodosSongs(){
        $songs = Song::paginate();
        return SongResource::collection($songs);
    }

////////////////////////////Econtrar Uma Música

public function UmSong(Request $request, $nome){
    $songs = Song::where('nome', $nome)->get();

    if($songs->isEmpty()) {
        return response()->json(['message' => 'Nenhuma música encontrada com o nome especificado.'], 404);
    }

    return SongResource::collection($songs);
}   

/////////////Adicionar Uma Música
public function AdicionarSong(Request $request) {
    $data = $request->all();
    
    
    $song = Song::create($data);

    // Retorne a música criada como um recurso
    return new SongResource($song);
}

////////////////Deletar Uma música
public function DeletarSong(Request $request, $albumNome, $songNome){

    $album = Album::where('nome', $albumNome)->first(); 
    if (!$album) {
        return response()->json(['message' => 'Álbum não encontrado'], 404);
    }
    $song = $album->songs()->where('nome', $songNome)->first();
    if (!$song) {
        return response()->json(['message' => 'Música não encontrada no álbum especificado'], 404);
    }
    $song->delete();
    return response()->json(['message' => 'Música excluída com sucesso']);
}





}
