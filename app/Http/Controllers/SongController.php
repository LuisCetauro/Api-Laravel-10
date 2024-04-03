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
public function AdicionarSong(Request $request, $albumNome) {
    $data = $request->all();
    
    // Encontre o álbum pelo nome
    $album = Album::where('nome', $albumNome)->first(); 
    if (!$album) {
        return response()->json(['message' => 'Álbum não encontrado'], 404);
    }
    
    // Crie a música e associe-a ao álbum
    $song = new Song($data); // Crie uma nova instância de Song com os dados recebidos
    $album->songs()->save($song); // Salve a música associada ao álbum

    // Retorne os dados brutos da música criada
    return response()->json($song, 201);
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