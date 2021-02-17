function loadMessages(){
    var msgContato = document.getElementById('msgContato').style.display = 'none';
    var msgEmail = document.getElementById('msgEmail').style.display = 'none'
    var msgTelefone = document.getElementById('msgTelefone').style.display = 'none'
    var msgEmpresa = document.getElementById('msgEmpresa').style.display = 'none'
    var msgCnpj = document.getElementById('msgCnpj').style.display = 'none'
    var msgCep = document.getElementById('msgCep').style.display = 'none'
    var msgLogradouro = document.getElementById('msgLogradouro').style.display = 'none'
    var msgNumero = document.getElementById('msgNumero').style.display = 'none'
    var msgBairro = document.getElementById('msgBairro').style.display = 'none'
    var msgCidade = document.getElementById('msgCidade').style.display = 'none'
    var msgEstado = document.getElementById('msgEstado').style.display = 'none'
}
            
            
function validateContato() {
    var contato = document.getElementById('contato').value;
    var regexp = /^([A-z\s\u00C0-\u00FF]{2,})$/g;
    var msgContato = document.getElementById('msgContato');
    if(regexp.test(contato)){
        msgContato.style.display = 'none';
    }else{
        msgContato.innerHTML = "Preencha o contato corretamente.";
        msgContato.style.display = 'block';
    }
}
            
function validateEmail() {
    var email = document.getElementById('email').value
    var regexp = /^([A-z0-9-]{2,})+@([A-z0-9-]{2,})\.([A-z0-9\.]{1,})/g
    var msgEmail = document.getElementById('msgEmail')
    if(regexp.test(email)){
        msgEmail.style.display = 'none'
    }else{
        msgEmail.innerHTML = "Preencha o e-mail corretamente."
        msgEmail.style.display = 'block'
    }
}
            
function validateTelefone() {
    var telefone = document.getElementById('telefone').value
    var regexp = /^([0-9]{2})?(\s)?([0-9]{1})?(\s)?([0-9]{8,9})$/g
    var msgTelefone = document.getElementById('msgTelefone')
    if(regexp.test(telefone)){
        msgTelefone.style.display = 'none'
    }else{
        msgTelefone.innerHTML = "Preencha o telefone corretamente."
        msgTelefone.style.display = 'block'
    }
}
            
function validateEmpresa() {
    var empresa = document.getElementById('empresa').value
    var regexp = /^([A-z0-9-\s\.\u00C0-\u00FF]{2,})$/g
    var msgEmpresa = document.getElementById('msgEmpresa')
    if(regexp.test(empresa)){
        msgEmpresa.style.display = 'none'
    }else{
        msgEmpresa.innerHTML = "Preencha a razão social corretamente."
        msgEmpresa.style.display = 'block'
    }
}
            
function validateCnpj() {
    var cnpj = document.getElementById('cnpj').value
    var regexp = /^([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})$/g
    var msgCnpj = document.getElementById('msgCnpj')
    if(regexp.test(cnpj)){
        msgCnpj.style.display = 'none'
    }else{
        msgCnpj.innerHTML = "Cnpj inválido."
        msgCnpj.style.display = 'block'
    }
}
                        
function autoComplete(conteudo) {
    if (!("erro" in conteudo)) {
        document.getElementById('logradouro').value=(conteudo.logradouro) 
        document.getElementById('bairro').value=(conteudo.bairro)
        document.getElementById('cidade').value=(conteudo.localidade)
        document.getElementById('estado').value=(conteudo.uf)            
        document.getElementById('numero').value=''  
    }else {
        var msgCep = document.getElementById('msgCep')
        msgCep.innerHTML = "Cep não encontrado."
        msgCep.style.display = 'block'
    }
}  
            
function validateCep() {
    var cep = document.getElementById('cep').value
    var regexp = /^([0-9]{5})(\-)?([0-9]{3})$/g
    var msgCep = document.getElementById('msgCep')
    if(regexp.test(cep)){
        msgCep.style.display = 'none';
        var script = document.createElement('script')
        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=autoComplete'
        document.body.appendChild(script)
    }else{
        msgCep.innerHTML = "Cep inválido."
        msgCep.style.display = 'block'
    }
}
            
function validateLogradouro() {
    var logradouro = document.getElementById('logradouro').value
    var regexp = /^([A-z\.\s\u00C0-\u00FF]{1,})?([A-z0-9\s\u00C0-\u00FF]{1,})$/g
    var msgLogradouro = document.getElementById('msgLogradouro')
    if(regexp.test(logradouro)){
        msgLogradouro.style.display = 'none'
    }else{
        msgLogradouro.innerHTML = "Logradouro inválido."
        msgLogradouro.style.display = 'block'
    }
}
            
function validateNumero() {
    var numero = document.getElementById('numero').value
    var regexp = /^([A-z0-9]{0,})(\s)?([A-z0-9]{1,})$/g
    var msgNumero = document.getElementById('msgNumero')
    if(regexp.test(numero)){
        msgNumero.style.display = 'none'
    }else{
        msgNumero.innerHTML = "Número inválido."
        msgNumero.style.display = 'block'
    }
}
            
function validateBairro() {
    var bairro = document.getElementById('bairro').value
    var regexp = /^([A-z0-9\s\u00C0-\u00FF]{1,})([^\s])$/g
    var msgBairro = document.getElementById('msgBairro')
    if(regexp.test(bairro)){
        msgBairro.style.display = 'none'
    }else{
        msgBairro.innerHTML = "Bairro inválido."
        msgBairro.style.display = 'block'
    }
}
            
function validateCidade() {
    var cidade = document.getElementById('cidade').value
    var regexp = /^([A-z0-9\.\s\u00C0-\u00FF]{1,})?([A-z0-9\s\u00C0-\u00FF]{1,})$/g
    var msgCidade = document.getElementById('msgCidade')
    if(regexp.test(cidade)){
        msgCidade.style.display = 'none'
    }else{
        msgCidade.innerHTML = "Cidade inválida."
        msgCidade.style.display = 'block'
    }
}
            
function validateEstado() {
    var estado = document.getElementById('estado').value
    var regexp = /^([A-z]{2,2})$/g
    var msgEstado = document.getElementById('msgEstado')
    if(regexp.test(estado)){
        msgEstado.style.display = 'none'
    }else{
        msgEstado.innerHTML = "Estado inválida."
        msgEstado.style.display = 'block'
    }
} 
            
        

