<?php
    
    function testInput($data){ //validação de segurança para evitar paramPollution
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    /**
     * *DEFINIÇÂO DE VARIÁVEIS*
     */


    $alunos = include_once $_SERVER['DOCUMENT_ROOT'] . "/PHP/Avaliação 2/PDOs/getAlunos.php";

    $operacao = $cpf = $nome = $matricula = $idade = $curso = $grade = $ira =  "";
    $errOperacao = $errCpf = $errNome = $errMatricula = $errIdade = $errCurso = $errGrade = $errIra = "";




    /**
     * *EVALUAÇÃO DAS VARIÁVEIS*
     */


    if (isset($_REQUEST["operacao"])) {
        if (!empty($_REQUEST["operacao"])) {
            $operacao = testInput($_REQUEST["operacao"]);
            if ($operacao != "include" && $operacao != "update" && $operacao != "delete") {
                $errOperacao = "Operação não possível";
            }
        } else {
            $errOperacao = "Operação vazia;";
        }
    } else {
        $errOperacao = "Operação não definida;";
    }

    if (!empty($errOperacao)) {
        header("Location: ./Erro.php/?erro=".urlencode($errOperacao));
        die();
    }

    if (isset($_REQUEST["cpfAluno"])) {
         if (!empty($_REQUEST["cpfAluno"])) {
            $cpf = testInput($_REQUEST["cpfAluno"]); //!CPF
        } else {
            $errCpf = "Cpf vazio;";
        }
    } else {
        $errCpf = "Cpf não definido;";
    }

    if (isset($_REQUEST["txtNome"])) {
        if (!empty($_REQUEST["txtNome"])) {
            $nome = testInput($_REQUEST["txtNome"]); //!Nome
        } else {
            $errNome = "Nome vazio;";
        }
    } else {
        $errNome = "Nome não definido;";
    }


        if (isset($_REQUEST["txtMatricula"])) {
            if (!empty($_REQUEST["txtMatricula"])) {
                $matricula = testInput($_REQUEST["txtMatricula"]); //!Matricula
            } else {
                $errMatricula = "Matricula vazia;";
            }
        } else {
            $errMatricula = "Matricula não definida;";
        }


        if (isset($_REQUEST["nmbIdade"])) {
            if (!empty($_REQUEST["nmbIdade"])) {
                $idade = testInput($_REQUEST["nmbIdade"]); //!Idade
            } else {
                $errIdade = "Idade vazia;";
            }
        } else {
            $errIdade = "Idade não definida;";
        }
       

        if (isset($_REQUEST["radCurso"])) {
            if (!empty($_REQUEST["radCurso"])) {
                $curso = testInput($_REQUEST["radCurso"]); //!Curso
            } else {
                $errCurso = "Curso vazio;";
            }
        } else {
            $errCurso = "Curso não definido;";
        }

        
        if (isset($_REQUEST["slctGrade"])) {
            if (!empty($_REQUEST["slctGrade"])) {
                $grade = testInput($_REQUEST["slctGrade"]); //!Grade
            } else {
                $errGrade = "Grade vazia;";
            }
        } else {
            $errGrade = "Grade não definida;";
        }

        if (isset($_REQUEST["slctGrade"])) {
            if (!empty($_REQUEST["slctGrade"])) {
                $grade = testInput($_REQUEST["slctGrade"]); //!Grade
            } else {
                $errGrade = "Grade vazia;";
            }
        } else {
            $errGrade = "Grade não definida;";
        }
    
    /**
     * Direcionamento das operações (cada operação gere os dados captados nas queries do REQUEST)
     */

    if ($operacao == "include") {

        $erroTotal = $errCpf.$errNome.$errMatricula.$errIdade.$errCurso.$errGrade;

        if(empty(trim($erroTotal)) && !array_key_exists($cpf, $alunos)){
            
            $pdo = require_once($_SERVER['DOCUMENT_ROOT']."/PHP/Avaliação 2/PDOs/stablishConnectionAlunos.php");

            $stm = $pdo->query('INSERT INTO Aluno(cpf, nome, matricula, idade, curso, grade) 
	                                    VALUES ( :cpf, :nome, :matricula, :idade, :curso, :grade);'); //! O IRA é setado automáticamente pelo banco!

            $stm->bindParam(':cpf', $cpf);
            $stm->bindParam(':nome', $nome);
            $stm->bindParam(':matricula', $matricula);
            $stm->bindParam(':idade', $idade);
            $stm->bindParam(':curso', $curso);
            $stm->bindParam(':grade', $grade); 

            $stm->execute();

            $pdo = null;
        } else {
            header("Location: ./Erro.php/?erro=" . urlencode($erroTotal));
            die();
        }

        header("Location: ./Home.php/");
        die("Aluno Cadastrado com sucesso!!");
    }

    if ($operacao == "update") {

        $erroTotal = $errCpf.$errNome.$errMatricula.$errIdade.$errCurso.$errGrade.$errIra;

        if(empty(trim($erroTotal)) && array_key_exists($cpf, $alunos)){
            
            $pdo = require_once($_SERVER['DOCUMENT_ROOT']."/PHP/Avaliação 2/PDOs/stablishConnectionAlunos.php");

            $stm = $pdo->query('UPDATE Aluno 
                                    SET nome = :nome,  matricula = :matricula, idade = :idade, curso = :curso, grade = :grade, ira = :ira) 
	                                   WHERE cpf = :cpf');

            $stm->bindParam(':cpf', $cpf);
            $stm->bindParam(':nome', $nome);
            $stm->bindParam(':idade', $idade);
            $stm->bindParam(':curso', $curso);
            $stm->bindParam(':grade', $grade); 
            $stm->bindParam(':ira', $ira); 

            $stm->execute();

            $pdo = null;
        } else {
            header("Location: ./Erro.php/?erro=" . urlencode($erroTotal));
            die();
        }
        
        header("Location: ./Home.php/");
        die("Aluno editado com sucesso!!");
    }

    if ($operacao == "delete") {

        if(empty(trim($errCpf)) && array_key_exists($cpf, $alunos)){

            $pdo = require_once($_SERVER['DOCUMENT_ROOT']."/PHP/Avaliação 2/PDOs/stablishConnectionAlunos.php");

            $stm = $pdo->query('DELETE FROM Aluno
	                                    VALUES cpf = :cpf;'); 

            $stm->bindParam(':cpf', $cpf);

            $stm->execute();

        } else {
            header("Location: ./Erro.php/?erro=" . urlencode($errCpf));
            die();
        }

        header("Location: ./Home.php/");
        die("Aluno excluído com sucesso!!");
    }


?>
