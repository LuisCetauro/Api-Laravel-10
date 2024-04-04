<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Http\Resources\AlbumsResource;
use App\Http\Resources\AlbumResource;     

class AlbumController extends Controller
{


    ////////////////////Pegar todos os Albums e suas músicas
    public function TodosAlbums()
    {
        $albums = Album::with(['songs' => function ($query) {
            $query->orderBy('trackid', 'asc'); 
        }])->orderBy('ano', 'desc')->get();
    
        return AlbumsResource::collection($albums);
    }

    ////Pegar um Album//////


    public function UmAlbum(Request $request, $nome)
    {
        $album = Album::where('nome', $nome)->first();
    
        if (!$album) {
            return response()->json(['error' => 'Álbum não encontrado'], 404);
        }
    
        $albumData = [
            'nome' => $album->nome,
            'ano' => $album->ano,
            'album_id' => $album->album_id,
            'musicas' => $album->songs 
        ];
    
        return response()->json($albumData);
    }
    



    //////////////////////////////Adicionar um novo album////////////
    public function AdicionarAlbum(Request $request)
    {
        $data = $request->all();    
        $album = Album::create($data);
    
        return response()->json($album, 201);
    }
    



    ////////Deletar um Album/////////


    public function DeletarAlbum(Request $request, $nome){
        $album = Album::where('nome', $nome)->first();

        if (!$album) {
            return response()->json(['message' => 'Álbum não encontrado'], 404);
        }
    
        $album->delete();
    
        return response()->json(['message' => 'Álbum deletado com sucesso']);
    }
}
