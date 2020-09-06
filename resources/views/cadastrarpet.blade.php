<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link rel= "stylesheet " href= "{{asset('css/app.css')}}" > -->
    <link rel="stylesheet" href="css/form-pet.css">
</head>
<body>

<header>
@include('header')
</header>
    <!-- ESPAÇO PARA CADASTRO DO PET -->

<section class="container-pet-form">
<h1>Cadastre o seu Pet </h1>  
<div class="form-especie">
   <form action="" method="post" enctype = "multipart/form-data">
        <select name="especie"class="form-control">
            <option selected disabled>Olá, qual a espécie do seu Pet? </option>
            <option value="cachorro">Cachorro</option>
             <option value="gato">Gato</option>
             <option value="passaro">Pássaro</option>
             <option value="roedor">Roedor</option>
             <option value="reptil">Reptil</option>
             <option value="peixe">Peixe</option>
        </select>
</div>
    <br>
    <div class="form-nome">
        <label for="nomePet">Nome </label> <br>
        <input type="text" name="nomePet" id="nomePet"placeholder="Snoopy da Silva" class="form-control" > 
        <div>
        <br>
        <div class="form-genero">
        <select name="genero"class="form-control">
        <option selected disabled>Genero</option>
            <option value="feminino">Fêmea</option>
             <option value="masculino">Macho</option>
        </select>
</div>
        <br>
        <div class="form-aniversario">
        <label for="nascimento">Data de nascimento</label>
        <div class="row">
        <div class="col-lg-4  col-xs-12" >
        <select name="nascimentoDia" class="form-control">
          <option selected disabled></option>
          <option value="1">01</option>
          <option value="2">02</option>
          <option value="3">03</option>
          <option value="5">05</option>
          <option value="6">06</option>
          <option value="7">07</option>
          <option value="8">08</option>
          <option value="9">09</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
        </div>
        <div class="col-lg-4  col-xs-12" >
        <select name="nascimentoMes" class="form-control">
          <option selected disabled></option>
          <option value="1">janeiro</option>
          <option value="2">fevereiro</option>
          <option value="3">março</option>
          <option value="4">abril</option>
          <option value="5">maio</option>
          <option value="6">junho</option>
          <option value="7">julho</option>
          <option value="8">agosto</option>
          <option value="9">setembro</option>
          <option value="10">outubro</option>
          <option value="11">novembro</option>
          <option value="12">dezembro</option>
        </select>
        </div>
        <div class="col-lg-4  col-xs-12" >
        <select name="nascimentoAno" class="form-control">
          <option selected disabled></option>
          <option value="1990">1990</option>
          <option value="1991">1991</option>
          <option value="1992">1992</option>
          <option value="1993">1993</option>
        </select>
    </div>
</div>
</section>
<br>

<section class="container-pet-foto">
  <div class = "foto">
<div class="row">
      <a href="#" class="thumbnail">
      <img src="img/pet2.png" alt="inserir uma foto do seu Pet" >
    </a>
    </div>
</div>
<div class = "comentarios">
      <label for="comentarios"></label>
    <br>
    <textarea name="comentarios" class="form-control" rows="5" cols="5">Conte-nos um pouco mais sobre o seu Pet</textarea>
    <br>
    <div class="caption" >
      <input type="file" name="arquivo" value =  " " >
      <br>
</div>
</div>
</section>
      <div class="container-pet-preferencias">
      <label for="preferencias">Selecione os interesses principais do seu Pet:</label>
    <br>
    <label for="rações"><input type="checkbox" name="preferencias[]" id = "rações" value="rações"> Rações e comidinhas </label>
    <br>
    <label for="petiscos"><input type="checkbox" name="preferencias[]" id = "petiscos" value="petiscos"checked> Petiscos</label>
    <br>
    <label for="brinquedos"><input type="checkbox" name="preferencias[]" id = "brinquedos" value="brinquedos"> Brinquedos</label>
    <br>
    <label for="roupinhas"><input type="checkbox" name="preferencias[]" id = "roupinhas" value="roupinhas"> Roupinhas e acessórios</label>
    <br>
    <label for="indicações"><input type="checkbox" name="preferencias[]" id = "indicações" value="indicações"> Indicações Pet Service </label>
    <br>
    <label for="remedios"><input type="checkbox" name="preferencias[]" id = "remedios" value="remedios"> Remedios </label>
    <br>
<div class="row"> 
    <div class="col-lg-12 col-xs-12">
    <button type="submit"  class="btn btn-lg btn-block" style='color:white; background-color:rgb(3, 152, 158)'>Cadastrar</button>
</div>   
</div>
</div>
    </form>
    <section class="base">
          @include('footer')
    </section>
</body>
</html>

