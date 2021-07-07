<?php
    class Aluno {
        private string $cpf;
        private string $nome;
        private string $matricula;
        private int $idade;
        private string $curso;
        private string $grade;
        private float $ira;

        function __construct(string $cpf, string $nome, string $matricula, int $idade, string $curso, string $grade, float $ira = 10){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->matricula = $matricula;
            $this->idade = $idade;
            $this->curso = $curso;
            $this->grade = $grade;
            $this->ira = $ira;
        }
        
        function getCpf(){
            return $this->cpf;
        }

        function getNome(){
            return $this->nome;
        }

        function getMatricula(){
            return $this->matricula;
        }

        function getIdade(){
            return $this->idade;
        }

        function getCurso(){
            return $this->curso;
        }

        function setCurso($novoCurso){
            $this->curso = $novoCurso;
        }

        function getGrade(){
            return $this->grade;
        }

        function getIra(){
            return $this->ira;
        }

        function setIra($novoIra){
            $this->ira = $novoIra;
        }
    }

?>