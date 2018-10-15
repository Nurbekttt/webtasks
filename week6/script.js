const buttons = document.getElementById("tasks").getElementsByTagName("button")
const divka = document.getElementById("tasks").getElementsByTagName("div")
for (var i = 0; i < buttons.length; i++) {
	buttons[i].addEventListener("click", function(event){
		event.currentTarget.parentNode.dataset.status="done"
	})
};