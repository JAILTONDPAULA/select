// * ////////////////////////// * //
// * evitar interação com input * //
// * ////////////////////////// * //
$('.select input[type=text]').on('keydown paste cut',function(e){ if([9,116].includes(e.keyCode)){ e.preventDefault() } })
$('label.select').find('input[type=text]').on({'keydown':deselecionar}) 
function deselecionar(e){
    if(e.keyCode == 9){
        $(this).siblings('.modalSelect').find('section').hide(200)
        setTimeout(()=>{$(this).siblings('.modalSelect').hide()},300)
    }
}
// * //////////////////////// * //
$('.modalSelect').hide()
// * //////////////////////// * //

// * ////////////// * //
// * abri as opções * //
// * ////////////// * //
$('label.select').find('input[type=text]').on({'click focus':selecionar})
function selecionar(){
    $(this).siblings('.modalSelect').css({display:'flex'})
    $(this).siblings('.modalSelect').find('section').show(300).focus()
}
// * /////////////////// * //
// * selecionar um opção * //
// * /////////////////// * //
$('label.select').find('option').on({click:gravar})
function gravar(){
    $(this).closest('label.select').find('input[type=hidden]').val($(this).val())
    $(this).closest('label.select').find('input[type=text]').val($(this).text())
    $(this).closest('label.select').find('.modalSelect svg').trigger('click')
}
// * ////////////// * //
// * fechar o bloco * //
// * ////////////// * //
$('.modalSelect svg').on({click:closeBloco})
function closeBloco(){
    $(this).closest('.modalSelect').find('section').hide(200)
    setTimeout(()=>{ $(this).closest('.modalSelect').hide() },300)
}
// * //////////////// * //
// * fechar com "esc" * //
// * //////////////// * //
$(window).on("keydown",function(e){
    if(e.keyCode == 27){
        $('.modalSelect').find('section').hide(200)
        setTimeout(()=>{ $('.modalSelect').hide() },300)
    }
})
