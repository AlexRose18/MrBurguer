$(document).ready(function(){
$('#tabla-inv').Tabledit({
deleteButton: false,
editButton: false,
columns: {
identifier: [0, 'id_ingrediente'],
editable: [[1, 'nombre_ingrediente'], [2, 'cantidad']]
},
hideIdentifier: false,
url: 'live_edit.php'
});
});