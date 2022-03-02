<?php

namespace App\Http\Livewire;

use App\Mail\Contato as MailContato;
use App\Models\Contato as ModelContato;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contato extends Component{

    public $nome, $email, $celular, $explicacao, $confirm;

    protected $rules = [
        'nome' => 'required',
        'email' => 'required|email',
        'celular' => 'required',
        'explicacao' => 'required|max:255',
        'confirm' => 'accepted'
    ];

    protected $messages = [
        'nome.required' => 'O campo nome é obrigatório.',
        'email.required' => 'O campo email é obrigatório.',
        'email.email' => 'O campo deve ser um email válido.',
        'celular.required' => 'O campo celular é obrigatório.',
        'explicacao.required' => 'O campo explicacao é obrigatório.',
        'explicacao.max' => 'O campo explicacao tem limite de 255 caracteres.',
        'confirm.accepted' => 'O campo precisa ser confirmado.',
    ];

    public function submit(){

        $this->validate();

        try {
            $contato = new ModelContato();

            $contato->nome = $this->nome;
            $contato->email = $this->email;
            $contato->celular = $this->celular;
            $contato->explicacao = $this->explicacao;
            $contato->confirm = $this->confirm;

            $contato->save();
        } catch (\Throwable $e) {
            $this->emit('toastr', ['type' => 'error', 'message' => 'Ocorreu um erro na hora de solicitar a reunião!', 'title' => 'Erro ao Solicitar Reunião!']);
        }

        try {
            Mail::to(Config::get('mail.from.address'))
            ->send(new MailContato($this->nome, $this->email, $this->celular, $this->explicacao));
        } catch (\Throwable $th) {
            $this->emit('toastr', ['type' => 'error', 'message' => 'Ocorreu um erro na hora de solicitar a reunião, tente novamente!', 'title' => 'Erro ao Solicitar Reunião!']);
        }

        // $this->emit('toastr', ['type' => 'success', 'message' => 'Aguarde até que nós entremos em contato, para marcar a reunião!', 'title' => 'Reunião Solicitada!']);
        $this->emit('toastr', ['type' => 'success', 'message' => 'Seu contato foi enviado com sucesso!', 'title' => 'Contato enviado!']);
        $this->reset('nome', 'email', 'celular', 'explicacao', 'confirm');
        $this->resetErrorBag();
        $this->resetValidation();
    }
    public function render(){

        return view('livewire.contato');
    }
}
