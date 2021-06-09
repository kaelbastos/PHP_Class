<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/Avaliação 1/resources/css/formDivStyle.css">
</head>

<body>
    <div class="content">
        <form name="form" method="POST" action="process.php">
            <div>
                <div>
                    <label for="txtNome">Nome:</label>
                    <div>
                        <input type="text" class="form-input" name="txtNome" id="txtNome" placeholder="Nome_do_aluno" required>
                    </div>
                </div>
                <br>
                <div>
                    <label for="radio saction">Curso:</label>
                </div>
                <div class="radio section" id="radio section">
                    <input class="form-radios" type="radio" name="radCurso" id="radio1" value="ADS" checked>
                    <label class="form-radios-label" for="radio1">
                        Análise de sistemas
                    </label>
                    <input class="form-radios" type="radio" name="radCurso" id="radio2" value="TPG">
                    <label class="form-radios-label" for="radio2">
                        Processos gerenciais
                    </label>
                    <input class="form-radios" type="radio" name="radCurso" id="radio3" value="TMA">
                    <label class="form-radios-label" for="radio3">
                        Manutenção de aeronaves
                    </label>
                </div>
                <br>
                <div>
                    <label for="slctPeriodo">Período:</label>
                </div>
                <select name="slctPeriodo" id="slctPeriodo">
                    <option value="Matutino" selected>Matutino</option>
                    <option value="Noturno">Noturno</option>
                </select>
                <br><br>
                <div>
                    <label for="cpfAluno">CPF:</label>
                    <div>
                        <input type="text" name="cpfAluno" class="form-input" id="cpfAluno" placeholder="000.000.000/00" required>
                    </div>
                </div>
                <br>
                <div>
                    <label for="txtTelefone">Telefone:</label>
                    <div>
                        <input type="text" name="txtTelefone" class="form-input" id="txtTelefone" placeholder="(00) 0000-0000" required>
                    </div>
                </div>
                <br>
                <div>
                    <label for="dataIngresso">Data de Ingresso:</label>
                    <div>
                        <input type="text" name="txtDataIngresso" class="form-input" placeholder="mm/dd/aaaa" required>
                    </div>
                </div>
                <br>
                <div>
                    <label for="txtObservacao">Observação:</label>
                    <div>
                        <input type="textArea" name="txtObservacao" class="form-input" id="txtObservacao" placeholder="Observação">
                    </div>
                </div>
                <br><br>
                <div>
                    <div class="submitButton">
                        <button type="submit" name="btnOperacao" value="Adicionar" class="btn">Adicionar</button>
                    </div>
                </div>
        </form>
    </div>
</body>

</html>