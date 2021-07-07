<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>

    <?php include "resources/Header.php";?>

    <div class='content'>

        <form action="Process.php" method="post">
            <fieldset>
                <legend>Novo Aluno</legend>
                 <div>
                    <label for="cpfAluno">CPF:</label>
                    <div>
                        <input type="text" name="cpfAluno" class="form-input" id="cpfAluno" placeholder="000.000.000/00" required>
                    </div>
                </div>

                <br>

                <div>
                    <label for="txtNome">Nome:</label>
                    <div>
                        <input type="text" class="form-input" name="txtNome" id="txtNome" placeholder="Nome do aluno" required>
                    </div>
                </div>

                <br>

                <div>
                    <label for="txtTelefone">Matricula:</label>
                    <div>
                        <input type="text" name="txtMatricula" class="form-input" id="txtMatricula" placeholder="SC XXXX-XXX" required>
                    </div>
                </div>

                <br>

                <div>
                    <label for="dataIngresso">Idade:</label>
                    <div>
                        <input type="number" name="nmbIdade" class="form-input" placeholder="00" required>
                    </div>
                </div>

                <br>

                <div>
                    <label for="radio-sectionn">Curso:</label>
                </div>
                
                <div class="radio-section" id="radio-section">
                    <div>
                        <input class="form-radios" type="radio" name="radCurso" id="radio1" value="ADS" checked>
                        <label class="form-radios-label" for="radio1">
                            Análise de sistemas
                        </label>
                    </div>

                    <div>
                        <input class="form-radios" type="radio" name="radCurso" id="radio2" value="TPG">
                        <label class="form-radios-label" for="radio2">
                            Processos gerenciais
                        </label>
                    </div>

                    <div>
                        <input class="form-radios" type="radio" name="radCurso" id="radio3" value="TMA">
                        <label class="form-radios-label" for="radio3">
                            Manutenção de aeronaves
                        </label>
                    </div>
                </div>

                <br>

                <div>
                    <label for="slctGrade">Grade:</label>
                </div>
                <select name="slctGrade" id="slctGrade">
                    <option value="2008">2008</option>
                    <option value="2018" selected>2018</option>
                </select>

                <br><br>

                <div>
                    <div class="submitButton">
                        <button type="submit" name="operacao" value="edit" class="btn">Editar</button>
                    </div>
                </div>
            </fieldset>
        </form>

    </div>

    <?php include "resources/Footer.php";?>

</body>
</html>