<!DOCTYPE html>
<html lang="pt-br">

<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCursos - Add Aluno</title>
</head>

<body>
    <header>
        <h1> eCursos - Console Gerenciamento | Add Alunos </h1>
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
      <div class="container-fluid border rounded p-5" style="box-shadow: 1px 2px 6px 4px rgba(0,0,0,0.1)">
        <button type="button" class="btn btn-primary">Voltar</button>

        <form action="editar-aluno.php" method="POST" class="mt-5">
          <div class="row mt-4">
            <div class="col-md-7">
              <p class="fw-bold">Nome:</p>
            </div>
            <div class="col-md-3">
              <p class="fw-bold">Status:</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7"><input type="text" class="form-control" name="nome" id="nome" aria-describedby="nome"></div>
            <div class="col-md-5">
              <select class="form-control" aria-label="Selecione" name="status">
                <option selected="">.:Selecione:.</option>
                <option value="1">Ativo</option>
                <option value="2">Inativo</option>
              </select>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-4">
              <p class="fw-bold">Telefone:</p>
            </div>
            <div class="col-md-8">
              <p class="fw-bold">Curso:</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"><input type="text" class="form-control" name="telefone" id="telefone" aria-describedby="telefone"></div>
            <div class="col-md-8">
              <select class="form-control" aria-label="Selecione" name="curse">
                <option selected="">.:Selecione:.</option>
                <option value="1">Sistemas para Intenet</option>
                <option value="2">Engenharia de Software</option>
              </select>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-6">
              <p class="fw-bold">Email:</p>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-md-6"><input type="email" class="form-control" name="email" id="email" aria-describedby="email"></div>
          </div>

          <button type="button" class="btn btn-success mr-2">Salvar</button>
          <button type="button" class="btn btn-danger">Cancelar</button>

        </form>
      </div>
    </main>

</body>

</html>