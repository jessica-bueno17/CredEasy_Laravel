//const dataNascimento = document.querySelector('#nascimento')

//dataNascimento.addEventListener('blur', (evento)=> {
   // validaDataNascimento(evento.target)
//})

// criando uma função para acessar os data-tipo
export function valida(input){
    const tipoDeInput = input.dataset.tipo

    if(validadores[tipoDeInput]) {
        validadores[tipoDeInput](input)
    }

    if(input.validity.valid) {
        input.parentElement.classList.remove('input-container--invalido')
        input.parentElement.querySelector('.input-mensagem-erro').innerHTML = ''
    } else {
        input.parentElement.classList.add('input-container--invalido')
        input.parentElement.querySelector('.input-mensagem-erro').innerHTML = mostraMensagemDeErro(tipoDeInput, input)
    }

}

const tiposDeErro = [
    'valueMissing',
    'typeMismatch',
    'patternMismatch',
    'customError'
]

const mensagensDeErro = {
    nome: {
        valueMissing: 'O campo de Nome não pode estar vazio.',
        patternMismatch: 'Insira seu Nome completo'
    },
    email: {
        valueMissing: 'O campo de Email não pode estar vazio.',
        typeMismatch: 'O Email digitado não é válido.'
    },
    senha: {
        valueMissing: 'O campo de Senha não pode estar vazio.',
        patternMismatch: 'A Senha deve conter entre 6 a 12 caracteres.'
    },
    cpf: {
        valueMissing: 'O campo de CPF não pode estar vazio.',
        customError: 'O CPF digitado não é válido.'
    },
    dataNascimento: {
        valueMissing: 'O campo de Data de Nascimento não pode estar vazio.',
        customError: 'Você deve ser maior que 18 anos para se cadastrar.'
    },
    telefone: {
        valueMissing: 'O campo de Telefone não pode estar vazio.'
    },
    profissao: {
        valueMissing: 'O campo de Profissão não pode estar vazio.'
    },
    renda: {
        valueMissing: 'O campo de Renda não pode estar vazio.'
    },
    cep:{
        valueMissing: 'O campo CEP não pode estar vazio.',
        patternMismatch:'O CEP digitado não é válido.',
        customError: 'Não foi possível buscar o CEP.'
    },
    cidade:{
            valueMissing: 'O campo de Cidade não pode estar vazio.'
    },
    estado: {
        valueMissing: 'O campo de Estado não pode estar vazio.'
    },
    logradouro: {
        valueMissing: 'O campo de Logradouro não pode estar vazio.'
    },
    numeroResidencia: {
        valueMissing: 'O campo de Número de Residência não pode estar vazio.'
    }
}

// tipos de input
const validadores = {
    dataNascimento: input => validaDataNascimento(input),
    cpf: input => validaCPF(input),
    cep: input => recuperarCEP(input)

}

function mostraMensagemDeErro(tipoDeInput, input) {
    let mensagem = ''
    tiposDeErro.forEach(erro => {
        if(input.validity[erro]) {
            mensagem = mensagensDeErro[tipoDeInput][erro]
        }
    })
    return mensagem

}

function validaDataNascimento(input) {
    const dataRecebida = new Date(input.value)
    let mensagem = ''

    if(!maiorQue18(dataRecebida)) {
        mensagem = 'Você deve ser maior que 18 anos para se cadastrar.'
    }

    input.setCustomValidity(mensagem)

}

function maiorQue18(data) {
    const dataAtual = new Date() //data atual
    const dataMais18 = new Date(data.getUTCFullYear() + 18, data.getUTCMonth(), data.getUTCDate())

    return dataMais18 <= dataAtual

}

function validaCPF(input) {
    const cpfFormatado = input.value.replace(/\D/g,'')
    let mensagem = ''

    if(!checaCPFRepetido(cpfFormatado) || !checaEstruturaCPF(cpfFormatado)) {
        mensagem = 'O CPF digitado não é válido.'
    }

    input.setCustomValidity(mensagem)

}

function checaCPFRepetido(cpf) {
    const valoresRepetidos = [
        '00000000000',
        '11111111111',
        '22222222222',
        '33333333333',
        '44444444444',
        '55555555555',
        '66666666666',
        '77777777777',
        '88888888888',
        '99999999999'
    ]
    let cpfValido = true

    valoresRepetidos.forEach(valor => {
        if(valor == cpf) {
            cpfValido = false
        }
    })

    return cpfValido

}

function checaEstruturaCPF(cpf) {
    const multiplicador = 10

    return checaDigitoVerificador(cpf,multiplicador)

}

function checaDigitoVerificador(cpf,multiplicador) {
    if (multiplicador >=12) {
        return true
    }

    let multiplicadorInicial = multiplicador
    let soma = 0
    const cpfSemDigitos = cpf.substr(0,multiplicador-1).split('')
    const digitoVerificador = cpf.charAt(multiplicador-1)
    for(let contador = 0; multiplicadorInicial > 1; multiplicadorInicial-- ) {
        soma = soma + cpfSemDigitos[contador]*multiplicadorInicial
        contador++
    }

    if(digitoVerificador == confirmaDigito(soma)) {
        return checaDigitoVerificador(cpf,multiplicador + 1)
    }

    return false

}

function confirmaDigito(soma) {
    return 11 - (soma % 11)

}


function recuperarCEP(input) {
    const cep = input.value.replace(/\D/g, '')
    const url = `https://viacep.com.br/ws/${cep}/json/`
    const options = {
        method: 'GET',
        mode: 'cors',
        headers: {
            'content-type': 'application/json;charset=utf-8'
        }
    }

    if(!input.validity.patternMismatch && !input.validity.valueMissing) {
        fetch(url,options).then(
            response => response.json()
        ).then(
            data => {
                if(data.erro) {
                    input.setCustomValidity('Não foi possível buscar o CEP.')
                    return
                }
                input.setCustomValidity('')
                preencheCamposComCEP(data)
                return
            }
        )
    }
}

function preencheCamposComCEP(data) {
    const logradouro = document.querySelector('[data-tipo="logradouro"]')
    const cidade = document.querySelector('[data-tipo="cidade"]')
    const estado = document.querySelector('[data-tipo="estado"]')

    logradouro.value = data.logradouro
    cidade.value = data.localidade
    estado.value = data.uf
}
