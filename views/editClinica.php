<div class="page-header">
    <h4 class="page-title">Editar Clinica</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Clinica</li>
    </ol>
</div>
<div class="row row-cards">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Editar Clinica</div>
            </div>
            <div class="card-body">

                <?php if(isset($info)):?>
                    <div class="alert alert-<?php echo ($info['type'] == "success")?'success':'danger'?>"><?php echo $info['msg'];?></div>
                <?php endif;?>

                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label class="form-label">Razão Social</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="raz_soc" value="<?php echo (isset($dataClinica['raz_soc']))?$dataClinica['raz_soc']:'';?>">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Nome Fantasia</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="nome_fantasia" value="<?php echo (isset($dataClinica['nome_fant']))?$dataClinica['nome_fant']:'';?>">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">cnpj</label>
                        <input type="text" class="form-control w-100 cnpj"  placeholder="" name="cnpj" value="<?php echo (isset($dataClinica['cnpj']))?$dataClinica['cnpj']:'';?>">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Nome Do responsável</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="nome_resp" value="<?php echo (isset($dataClinica['nome_resp']))?$dataClinica['nome_resp']:'';?>">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">CPF Do responsável</label>
                        <input type="text" class="form-control w-100 cpf"  placeholder="" name="cpf_resp" value="<?php echo (isset($dataClinica['cpf_resp']))?$dataClinica['cpf_resp']:'';?>">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">CEP</label>
                        <input type="text" class="form-control w-100 cep"  placeholder="" name="cep" id="cep" onblur="pesquisacep(this.value)" value="<?php echo (isset($dataClinica['cep']))?$dataClinica['cep']:'';?>">
                    </div>
                    
                    <div class="form-group ">
                        <label class="form-label">Rua</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="rua" id="rua" value="<?php echo (isset($dataClinica['rua']))?$dataClinica['rua']:'';?>">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Número</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="numero" id="numero" value="<?php echo (isset($dataClinica['numero']))?$dataClinica['numero']:'';?>">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Bairro</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="bairro" id="bairro" value="<?php echo (isset($dataClinica['bairro']))?$dataClinica['bairro']:'';?>">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Cidade</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="cidade" id="cidade" value="<?php echo (isset($dataClinica['cidade']))?$dataClinica['cidade']:'';?>">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Estado</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="estado" id="estado" value="<?php echo (isset($dataClinica['estado']))?$dataClinica['estado']:'';?>">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Latitude (Google Maps)</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="latitude" id="latitude" value="<?php echo (isset($dataClinica['latitude']))?$dataClinica['latitude']:'';?>">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Longitude (Google Maps)</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="longitude" id="longitude" value="<?php echo (isset($dataClinica['longitude']))?$dataClinica['longitude']:'';?>">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Telefone</label>
                        <input type="text" class="form-control w-100 phone_with_ddd"  placeholder="" name="telefone" value="<?php echo (isset($dataClinica['telefone']))?$dataClinica['telefone']:'';?>">
                    </div>

                    <div class="form-group ">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control w-100"  placeholder="" name="email" value="<?php echo (isset($dataClinica['email']))?$dataClinica['email']:'';?>">
                    </div>
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
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
  function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('uf').value=("");
    document.getElementById('ibge').value=("");
}

function meu_callback(conteudo) {
if (!("erro" in conteudo)) {
    //Atualiza os campos com os valores.
    document.getElementById('rua').value=(conteudo.logradouro);
    document.getElementById('bairro').value=(conteudo.bairro);
    document.getElementById('cidade').value=(conteudo.localidade);
    document.getElementById('uf').value=(conteudo.uf);
    // document.getElementById('ibge').value=(conteudo.ibge);
} //end if.
else {
    //CEP não Encontrado.
    limpa_formulário_cep();
    alert("CEP não encontrado.");
}
}

function pesquisacep(valor) {

//Nova variável "cep" somente com dígitos.
var cep = valor.replace(/\D/g, '');

//Verifica se campo cep possui valor informado.
if (cep != "") {

    //Expressão regular para validar o CEP.
    var validacep = /^[0-9]{8}$/;

    //Valida o formato do CEP.
    if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        document.getElementById('rua').value="...";
        document.getElementById('bairro').value="...";
        document.getElementById('cidade').value="...";
        document.getElementById('uf').value="...";
        // document.getElementById('ibge').value="...";

        //Cria um elemento javascript.
        var script = document.createElement('script');

        //Sincroniza com o callback.
        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

        //Insere script no documento e carrega o conteúdo.
        document.body.appendChild(script);

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
};
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