let countries = ["Kazakhstan","Russia","England","France"];
let cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy","Uralsk"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};

const section1 = document.getElementById("countries")
for (var i = 0; i < countries.length; i++) {
	var option=document.createElement("option")
	option.value=countries[i]
	option.innerHTML=countries[i]
	section1.appendChild(option)
};


		section1.addEventListener("change",function(){
			var country = section1.options[section1.selectedIndex].value
			const section2 = document.getElementById("cities")
			for (var i = 0; i < cities_by_country[country].length; i++) {
				var option = document.createElement("option")
				option.value=cities_by_country[country][i]
				option.innerHTML=cities_by_country[country][i]
				section2.appendChild(option)
			};

		})



