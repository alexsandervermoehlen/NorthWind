<?php

//namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

namespace App\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;
use Sofa\Eloquence\Mappable;

class clientes extends Model
{
    protected $table = 'clientes';
    protected $fillable = array('IDCliente','NomeCompanhia','Endereco','Cidade','Regiao','Telefone');
    protected $primaryKey = 'IDCliente';

    public function todosClientes() {
        return self::all();
    }
    public $timestamps = false;

    public function salvarCliente() {
        $input = Input::all();
        //dd($input);
        $cliente = new Clientes($input); // mass assigment
        $cliente->save();
        return $cliente;
        // $primeiro_nome = $input['primeiro_nome'];
        // $segundo_nome = $input['segundo_nome'];
    }

    public function getClientes($IDCliente) {
        $Cliente = self::find($IDCliente);
        if (is_null($Cliente)) {
            return false;
        }
        return $cliente;
    }

    public function deletarClientes($IDCliente) {
        $cliente = self::find($IDCliente);
        if (is_null($cliente)) {
            return false;
        }
        return $cliente->delete();
    }

    public function atualizarClientes($IDCliente) {
        $cliente = self::find($IDCliente);
        if (is_null($cliente)) {
            return false;
        }
        $input = Input::all();
        $cliente->fill($input);
        $cliente->save();
        return $cliente;
    }
}
