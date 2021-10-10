function limpar(){
    document.frm_entrarConta.txt_usuario.value = "";
    document.frm_entrarConta.txt_senha.value =  "";
    document.frm_entrarConta.txt_usuario.focus();
}

function limpar2(){
    document.frm_cadastrarConta.txt_usuario.value = "";
    document.frm_cadastrarConta.txt_senha.value = "";
    document.frm_cadastrarConta.txt_usuario.focus();
}


function entrar(){

    let usuario = document.frm_entrarConta.txt_usuario.value;
    let email = document.frm_entrarConta.txt_usuario.value;
    let senha = document.frm_entrarConta.txt_senha.value;

    if(usuario == "" || senha == ""){
        alert("Existem Campos Vazios, Preencha-os");
    }else if((usuario ==  "admin" || email == "admin")  && senha == "admin"){
        alert("Login feito com Sucesso!!");
    }else{
        alert("Conta Invalida!!");
        limpar();
    }
}

function cadastrar(){

    let usuario = document.frm_cadastrarConta.txt_usuario.value;
    let email = document.frm_cadastrarConta.txt_usuario.value;
    let senha = document.frm_cadastrarConta.txt_senha.value;

    if(usuario == "" || senha == ""){
        alert("Existem Campos Vazios, Preencha-os");
    }else if((usuario ==  "admin" || email == "admin")  && senha == "admin"){
        alert("Conta já Existe!!");
        limpar2();
    }else{
        alert("Conta Criada com Sucesso!!");
        limpar2();
    }
}