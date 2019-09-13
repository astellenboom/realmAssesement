
function loadNewContact(){

console.log("Btn clicked")

    $("#modalMain").load('/new_contact')


}


function editContact(id){

console.log("Btn  edit clicked")

    $("#modalMain").load('/edit_contact/'+id)


}