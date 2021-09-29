<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCursos - Alunos</title>
</head>

<body>
    <header>
        <h1> eCursos - Console Gerenciamento | Alunos </h1>
        <nav>
            <div>
                <table>
                    <tr><a href="./alunos.php">Alunos</a></tr>
                    <tr> || </tr>
                    <tr><a href="./cursos.php">Cursos</a></tr>
                </table>
            </div>
        </nav>
    </header>
    <BR>
    <main>
        <div>
            <table border=1>
                <tr><th>ID</th><th>Nome</th=><th>Ações</th> </tr>
                <tr>
                    <th class="align-middle">1</th>
                    <td class="align-middle">Joareis Antonio Fagundes da Fonseca</td>
                    <td style="width: 25%">
                        <a type="button" href="./visualizar_aluno.php">Visualizar</a>
                        <a type="button" href="./editar_aluno.php">Editar</a>
                        <a type="button" >Excluir</a>
                    </td>
                </tr>
            </table>
            <BR><BR>
            <a type="button" class="btn btn-primary" href="./adicionar_aluno.php">Adicionar Aluno</a>
        </div>
    </main>
</body>
</html>