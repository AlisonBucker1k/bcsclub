<div class="page-header">
    <h4 class="page-title">Adicionar Clinica</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Clinica</li>
    </ol>
</div>
<div class="row row-cards">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Inserir Clinica</div>
            </div>
            <div class="card-body">

                <?php if(isset($info)):?>
                    <div class="alert alert-<?php echo ($info['type'] == "success")?'success':'danger'?>"><?php echo $info['msg'];?></div>
                <?php endif;?>

                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label class="form-label">Razão Social</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="raz_soc">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Nome Fantasia</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="nome_fantasia">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">cnpj</label>
                        <input type="text" class="form-control w-100 cnpj"  placeholder="" name="cnpj">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Nome Do responsável</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="nome_resp">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">CPF Do responsável</label>
                        <input type="text" class="form-control w-100 cpf"  placeholder="" name="cpf_resp" onblur="validarCPF(this.value)">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">CEP</label>
                        <input type="text" class="form-control w-100 cep"  placeholder="" name="cep" id="cep" onblur="pesquisacep(this.value)">
                    </div>
                    
                    <div class="form-group ">
                        <label class="form-label">Rua</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="rua" id="rua">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Número</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="numero" id="numero">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Bairro</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="bairro" id="bairro">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Cidade</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="cidade" id="cidade">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Estado</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="estado" id="estado">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Latitude (Google Maps)</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="latitude" id="latitude">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Longitude (Google Maps)</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="longitude" id="longitude">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Telefone</label>
                        <input type="text" class="form-control w-100 phone_with_ddd"  placeholder="" name="telefone">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="email">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Senha</label>
                        <input type="password" class="form-control w-100"  placeholder="" name="senha">
                    </div>
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Publicar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?php echo BASE_URL;?>assets/blog/js/jquery.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/jquery.mask.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
    $('.phone_with_ddd').mask('(00) 0000-0000');
    $('.phone_with_ddd2').mask('(00) 9 0000-0000');
    $('.cpf').mask('000.000.000-00', {reverse: true});
    $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
    $('.rg').mask('0.000.000-AA');
    $('.cep').mask('00000-000', {reverse: true});
</script>

<script>

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#estado").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>

<script>
  function validarCPF(cpf) {
    if (typeof cpf !== "string") return false
    cpf = cpf.replace(/[\s.-]*/igm, '')
    if (
        !cpf ||
        cpf.length != 11 ||
        cpf == "00000000000" ||
        cpf == "11111111111" ||
        cpf == "22222222222" ||
        cpf == "33333333333" ||
        cpf == "44444444444" ||
        cpf == "55555555555" ||
        cpf == "66666666666" ||
        cpf == "77777777777" ||
        cpf == "88888888888" ||
        cpf == "99999999999" 
    ) {
      Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'O CPF é inválido',
  footer: 'Corrija o CPF'
})
    }
    var soma = 0
    var resto
    for (var i = 1; i <= 9; i++) 
        soma = soma + parseInt(cpf.substring(i-1, i)) * (11 - i)
    resto = (soma * 10) % 11
    if ((resto == 10) || (resto == 11))  resto = 0
    if (resto != parseInt(cpf.substring(9, 10)) ) Swal.fire({
      icon: 'error',
  title: 'Oops...',
  text: 'O CPF é inválido',
  footer: 'Corrija o CPF'
})
    soma = 0
    for (var i = 1; i <= 10; i++) 
        soma = soma + parseInt(cpf.substring(i-1, i)) * (12 - i)
    resto = (soma * 10) % 11
    if ((resto == 10) || (resto == 11))  resto = 0
    if (resto != parseInt(cpf.substring(10, 11) ) ) Swal.fire({
      icon: 'error',
  title: 'Oops...',
  text: 'O CPF é inválido',
  footer: 'Corrija o CPF'
})
    
}
</script>