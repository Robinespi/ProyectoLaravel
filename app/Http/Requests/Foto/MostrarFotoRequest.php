<?php

namespace Fototeca\Http\Requests\Foto;

use Fototeca\Http\Requests\Request;
use Fototeca\Models\Album\Album as Album;
use Illuminate\Support\Facades\Auth;
class MostrarFotoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = Auth::user();

        // Id del album recibido
        $idAlbum = $this->get('idAlbum');

        // Buscamos si ese usuario tiene un album con ese $id.
        $album = $user->album()->find($idAlbum);

        // Si ese album existe devolvemos true, en otro caso false (forbidden).
        if ($album)
            return true;
        else
            return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'idAlbum' => 'required'
        ];
    }
}
