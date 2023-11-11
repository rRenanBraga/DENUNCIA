<?php
class Paginas extends Controller{
     public function index(){
          $dados = ['titulo'=>'Página Inicial',
                    'descricao'=>'Aula de PHP'
                   ];
          $this->view('paginas/home', $dados);
          }//fim do método index

     public function sobre(){
          $dados = ['titulo'=>'SOBRE O SITE',
          'descricao'=>'Aqui você encontra o melhor conteúdo...'
         ];
          $this->view('paginas/sobre', $dados);
      }

      public function denuncia(){
          $dados = ['titulo'=>'Formulário de Denúncia Ambiental',
          'descricao'=>''
         ];
          $this->view('paginas/denuncia', $dados);
      }

      public function orgao(){
          $dados = ['titulo'=>'Órgãos Ambientais',
          'descricao'=>''
         ];
          $this->view('paginas/orgao', $dados);
      }

      public function progresso(){
        $dados = ['titulo'=>'PROGRESSO DA DENÚNCIA',
        'descricao'=>''
       ];
        $this->view('paginas/progresso', $dados);
    }

    public function norma(){
        $dados = ['titulo'=>'NORMAS AMBIENTAIS',
        'descricao'=>''
       ];
        $this->view('paginas/norma', $dados);
    }

    public function artigos(){
        $dados = ['titulo'=>'',
        'descricao'=>''
       ];
        $this->view('paginas/artigos', $dados);
    }

}//fim da classe


