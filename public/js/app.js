import { valida } from './validacao.js'

const inputs = document.querySelectorAll('input')

inputs.forEach(input => {
    
    if(input.dataset.tipo === 'renda') {
        input.addEventListener('focus', () => {
            SimpleMaskMoney.setMask(input, {
                prefix: 'R$ ',
                fixed: true,
                fractionDigits: 2,
                decimalSeparator: ',',
                thousandsSeparator: '.',
                cursor: 'end'
            })
        })
    }
    
    input.addEventListener('blur', (evento) => {
        valida(evento.target)
    })
})

