<?php

require_once "../php/conexaoMysql.php";
require_once "../php/autenticacao.php";

session_start();
$pdo = mysqlConnect();
exitWhenNotLogged($pdo);

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="stylesheet" href="../css/cadastro.css" />
  <link rel="stylesheet" href="../css/defaut.css" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <title>Cadastrar Funcionario</title>
</head>


<body>
  <header>
    <nav class="navbar">
      <img src="../images/logo.png" alt="logo" height="70" width="70" />
      <div>
        <ul class="nav nav-pills">
          <li class="itemmenu"><a href="../php/home.php"><i class="bi bi-house"></i> Home</a></li>
          <li class="itemmenu"><a href="../php/galeria_session.php"><i class="bi bi-image"></i> Galeria</a></li>
          <li class="itemmenu"><a href="../php/cadastro_enderecos_session.php"><i class="bi bi-geo"></i> Novo
              Endereço</a></li>
          <li class="itemmenu"><a href="../php/agendamento_session.php"><i class="bi bi-calendar2-event"></i>
              Agendamento</a></li>
          <li class="itemmenu"><a href="cadastro_funcionarios.php"><i class="bi bi-person-plus-fill"></i> Novo
              funcionario</a></li>
          <li class="itemmenu"><a href="cadastro_paciente.php"><i class="bi bi-person-heart"></i> Novo paciente</a>
          </li>
          <li class="itemmenu"><a href="../php/listar_funcionarios.php"><i class="bi bi-person-badge-fill"></i>
              Funcionarios</a></li>
          <li class="itemmenu"><a href="../php/listar_pacientes.php"><i class="bi bi-person-hearts"></i> Pacientes</a>
          </li>
          <li class="itemmenu"><a href="../php/listar_enderecos.php"><i class="bi bi-geo-alt-fill"></i> Endereços</a>
          </li>
          <li class="itemmenu"><a href="../php/listar_agendamentos.php"><i class="bi bi-calendar-event-fill"></i>
              Agendamentos</a></li>
          <li class="itemmenu"><a href="../php/listar_agendamentos_por_medico.php"><i class="bi bi-calendar-heart-fill"></i> Agendamentos Médico</a></li>
        </ul>
      </div>
      <div class="itemmenu">
        <a href="../php/logout.php"><i class="bi bi-door-closed-fill"></i> Sair</a>
      </div>
    </nav>
  </header>

  <main>
    <div class="container">
      <h3 id="teste">Cadastrar Funcionario</h3>
      <form class="row g-2" id="form_input">
        <div class="col-md-6">
          <div class="form-floating">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder=" " />
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-floating">
            <label for="sexo">Sexo:</label>
            <input type="text" class="form-control" id="sexo" name="sexo" placeholder=" " />
          </div>
        </div>


        <div class="col-md-6">
          <div class="form-floating">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder=" " />
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-floating">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder=" " />
          </div>
        </div>

        <div class="col-md-3">
          <div class="form-floating">
            <label for="cep">CEP:</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder=" " />
          </div>
        </div>

        <div class="col-md-3">
          <div class="form-floating">
            <label for="logradouro">Logradouro:</label>
            <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder=" " />
          </div>
        </div>


        <div class="col-md-3">
          <div class="form-floating">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder=" " />
          </div>
        </div>


        <div class="col-md-3">
          <div class="form-floating">
            <label for="data">Data do inicio do contrato: </label>
            <input type="date" class="form-control" id="data" name="data" />
          </div>
        </div>

        <div class="col-md-3">
          <div class="form-floating">
            <label for="salario">Salario: </label>
            <input type="text" class="form-control" id="salario" name="salario" placeholder=" " />
          </div>
        </div>


        <div class="col-md-9">
          <div class="form-floating">
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder=" " />
          </div>
        </div>


        <div class="col-md-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="check" name="check" onclick="habilitar_desabilitar()">
            <label class="form-check-label" for="check">Médico ?</label>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-floating">
            <label for="especialidade">Especialidade</label>
            <input type="text" class="form-control" id="especialidade" name="especialidade" placeholder=" " disabled />
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-floating">
            <label for="crm">CRM</label>
            <input type="text" class="form-control" id="crm" name="crm" placeholder=" " disabled />
          </div>
        </div>



        <!-- <button type="submit">Cadastrar</button> -->

        <div class="col-md-12">
          <button type="submit" class="btn btn-primary" id="btncadastrar">
            Cadastrar
          </button>
        </div>


      </form>
    </div>
  </main>


  <footer>
    <div class="rodape">

      <div id="imgrodape">
        <img src="../images/logoinv.png" alt="logo" height="200" width="200" />
      </div>

      <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1887.0900545011502!2d-48.286494991772166!3d-18.92342035954946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94a444f8f2f407cd%3A0x13b587c75013856b!2sR.%20Tiradentes%20-%20Fundinho%2C%20Uberl%C3%A2ndia%20-%20MG%2C%2038400-200!5e0!3m2!1spt-BR!2sbr!4v1647036787373!5m2!1spt-BR!2sbr" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <!-- <h6>ENDEREÇO:</h6> -->
        <ul id="listarodape">
          <li><i class="bi bi-telephone-fill"></i> (34) 9232-3232</li>
          <li><i class="bi bi-envelope-fill"></i> clinicagmv@mail.com</li>
          <li>CEP: 38400-200</li>
          <li>R. Tiradentes, 200</li>
          <li>Uberlândia - MG</li>
        </ul>
      </div>
    </div>
  </footer>



  <script>
    function sendForm(form) {
      let formData = new FormData(document.querySelector("form"));
      const options = {
        method: "POST",
        body: formData,
      };

      fetch("../php/cadastro_funcionario.php", options)
        .then((response) => {
          if (!response.ok) {
            throw new Error(response.status);
          }
          return response.json();
        })
        .then((resposta) => {
          window.location.href = resposta.destination;
        })
        .catch((error) => {
          form.reset();
          console.error("Falha inesperada: " + error);
        });
      return false;
    }
    window.onload = function() {
      const form = document.querySelector("#form_input");
      const inputCep = document.querySelector("#cep");
      inputCep.onkeyup = () => buscaEndereco(inputCep.value);
      form.onsubmit = function() {
        sendForm(form);
        return false;
      };
    };

    function habilitar_desabilitar() {
      if (document.getElementById("check").checked) {
        document.getElementById("especialidade").disabled = false;
        document.getElementById("crm").disabled = false;
      } else {
        document.getElementById("especialidade").disabled = true;
        document.getElementById("crm").disabled = true;
      }
    }

    function buscaEndereco(cep) {
      if (cep.length != 9) return;

      let xhr = new XMLHttpRequest();
      xhr.open("GET", "../php/busca-endereco.php?cep=" + cep, true);

      xhr.onload = function() {
        // verifica o código de status retornado pelo servidor
        if (xhr.status != 200) {
          console.error("Falha inesperada: " + xhr.responseText);
          return;
        }

        // converte a string JSON para objeto JavaScript
        try {
          var endereco = JSON.parse(xhr.responseText);
        } catch (e) {
          console.error("String JSON inválida: " + xhr.responseText);
          return;
        }

        // utiliza os dados retornados para preencher formulário
        let form = document.querySelector("form");

        form.cidade.value = endereco.cidade;
        form.logradouro.value = endereco.logradouro;
        form.estado.value = endereco.estado;
      };

      xhr.onerror = function() {
        console.error("Erro de rede - requisição não finalizada");
      };

      xhr.send();
    }
  </script>

  <!-- Optional JavaScript -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>