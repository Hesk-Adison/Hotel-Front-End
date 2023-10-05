 var burguer = document.querySelector(".burguer");

burguer.addEventListener("click", function(){
    var sidebar = document.querySelector(".container").classList.toggle("show-menu");
})
document.querySelector("#dias").addEventListener("change", actualizapreco)
document.querySelector("#layout-sim").addEventListener("change", actualizapreco)
document.querySelector("#layout-nao").addEventListener("change", actualizapreco)
document.querySelector("#prazo").addEventListener("change", function(){
    const prazo = document.getElementById("prazo").value
    document.querySelector("label[for=prazo]").innerHTML= 'Hospedagem: ' + prazo + " Dias"
    actualizapreco()
})

function actualizapreco(){
    const dias =document.querySelector("#dias").value
    const incluicarro=document.querySelector("#layout-sim").checked
    const prazo =document.querySelector("#prazo").value

    let preco = dias * 6000 * prazo
    if (incluicarro)preco += 2000
    document.querySelector("#preco").innerHTML= "Mts:" + preco.toFixed(2)
}
