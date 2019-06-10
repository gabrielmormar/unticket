<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3|max:100',
            'codigo' => 'required|numeric',
            'cidade_evento' => 'required',
            'classe_evento' => 'required',
            'faixa_evento' => 'required',
            'cod_apresentacao' => 'required',
            'data_apresentacao' => 'required',
            'horario_apresentacao' => 'required',
            'valor_ingresso' => 'required',
            'qtd_ingressos' => 'required',
            'sala_apresentacao' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Insira o nome do evento',
            'codigo.required' => 'Insira o código do evento',
            'codigo.numeric' => 'Código precisa ser numérico',
            'cidade_evento.required' => 'Insira a cidade do evento',
            'classe_evento.required' => 'Insira a classe do evento',
            'faixa_evento.required' => 'Insira a faixa etária do evento',
            'cod_apresentacao.required' => 'Insira da apresentacao',
            'data_apresentacao.required' => 'Insira a data do evento',
            'horario_apresentacao.required' => 'Insira o horário do evento',
            'valor_ingresso.required' => 'Insira valor do ingresso do evento',
            'qtd_ingressos.required' => 'Insira a quantidade de ingressos do evento',
            'sala_apresentacao.required' => 'Insira a sala do evento',
        ];
    }
}
