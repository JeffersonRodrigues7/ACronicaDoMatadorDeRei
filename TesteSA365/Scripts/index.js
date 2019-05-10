$(document).ready( function(){

        $('#livro01-tab').click( function(){
                $('#s1').css({'background': 'linear-gradient(to top, rgba(180, 96, 17, 0), rgba(180, 96, 17, 100)), url(../../TesteSA365/Imgs/_NomeDoVento.jpg) center no-repeat',
                             'background-size': 'cover'
                })
        })

        $('#livro02-tab').click( function(){
                $('#s1').css({'background': 'linear-gradient(to top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 100)), url(../../TesteSA365/Imgs/_TemorDoSabio.jpg) center no-repeat',
                        'background-size': 'cover'
                }) 
        })

        $('#livroExtra-tab').click( function(){
                $('#s1').css({'background': 'linear-gradient(to top, rgba(66, 107, 160, 0),rgba(66, 107, 160, 100)), url(../../TesteSA365/Imgs/_MusicaDoSilencio.jpg) center no-repeat',
                        'background-size': 'cover'
                })
        })
    
        $('#btn-Form').click(function() {
               
                if($('#nomeContato').val().length > 30 || $('#nomeContato').val().length < 2) {
                        alert('Nome do contato deve conter entre 2 a 30 caracteres')
                        return false

                }else if($('#telefoneContato').val().length < 4 || validarTelefone($('#telefoneContato').val() )) {
                        alert("Digite apenas números no campo telefone, com no minimo 4 caracteres");
                        return false
                
                }else if($('#emailContato').val().length > 30 || $('#emailContato').val().length < 2){
                        alert('Email do contato deve conter entre 2 a 30 caracteres')
                }
        })

        $('#btn1').click( function() { 
                define(true, false, false, false)
                mensagem01()     
        } )

        $('#btn2').click( function() { 
                define(false, true, false, false)
                mensagem02()    
        } )

        $('#btn3').click( function() {
                define(false, false, true, false)
                mensagem03()      
        } )

        $('#btn4').click( function() { 
                define(false, false, false, true)
                mensagem04()    
        } )

})

var intervalo = 5000;

var btn1 = true;
var btn2 = false;
var btn3 = false;
var btn4 = false;

mensagem1 = "Existem 2 contos baseados nos livros publicados em antologias, são eles: A Árvore Relâmpago que conta uma história extra sobre Bast, "+
"o discípulo de Kvothe e "+
"How Old Holly Came To Be(sem tradução oficial), uma história extra sobre o mundo da série Crônica do Matador do Rei.";

mensagem2 = "Os livros da série Crônica do Matador do Rei estiveram em primeiro lugar na lista de mais vendidos do The New York Times.";

mensagem3 = "A série de livros Matador do Rei lançada em 2009 tem como o primeiro livro O Nome do Vento."+
" O segundo livro, O Temor do Sábio foi lançado em 2011 e o terceiro livro ainda é esperado, deve se chamar The Doors of Stone. Os fãs estão indo a loucura esperando, mas ele só deve ser lançado 2020."

mensagem4 = "Para garantir uma boa história, nada melhor do que a aprovação do escritor mais aclamado dos últimos tempos."+
" Martin elogiou o universo criado por Rothfuss, colocando-o como melhor fantasia épica do ano de 2011, além de ter lido o último livro(mais de 900 páginas) em apenas um dia."

mensagem01();

function mensagem01(){
        if(btn1 == true){
                $('#conteudo').html(mensagem1);
                define(false, true, false, false);
                setTimeout("mensagem02()", intervalo);
        }
}

function mensagem02(){
        if(btn2 == true){
                define(false, false, true, false);
                $('#conteudo').html(mensagem2);
                setTimeout("mensagem03()", intervalo);
        }
}

function mensagem03(){
        if(btn3 == true){
                define(false, false, false, true);
                $('#conteudo').html(mensagem3);
                setTimeout("mensagem04()", intervalo);
        }
}

function mensagem04(){
        if(btn4 == true){
                define(true, false, false, false);
                $('#conteudo').html(mensagem4);
                setTimeout("mensagem01()", intervalo);
        }
}

function color(a, b, c, d){
        $('#btn1').css({'color': a});
        $('#btn2').css({'color': b});
        $('#btn3').css({'color': c});
        $('#btn4').css({'color': d});
}

function define(a, b, c, d){/*Eu usei essa função porque sem definir se os botões são true ou false toda 
        vez que  eu clicava em um botão eu criava uma nova "thread", dessa forma várias funções eram chamadas 
        ao mesmo tempo, dessa forma a mensagem na tela para o usuário aparecia e sumia rapidamente*/
        btn1 = a
        btn2 = b
        btn3 = c
        btn4 = d

        color1 = "black";
        color2 = "black";
        color3 = "black";
        color4 = "black";

        if(a == true) color4 = "red"
        else if(b == true) color1 = "red"
        else if(c == true) color2 = "red"
        else if(d == true) color3 = "red"
        color(color1, color2, color3, color4)
}

function validarTelefone(telefone){
        let valoresValidos = "0123456789"

        for(i=0; i<telefone.length ; i++) {
		if (valoresValidos.indexOf(telefone.charAt(i), 0) == -1) return true;
        }
        return false
}
