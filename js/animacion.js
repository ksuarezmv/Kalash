window.addEventListener('scroll',function(){

	var imagen = document.querySelectorAll('.fade_up');
		for(var i = 0; i < imagen.lenght; i++){

			var altura = window.innerHeight/1.3;

			var distancia = imagen[i].getBoundingClientRect().top;

			console.log(altura);
			console.log(distancia);

			imagen[i].classList.add('transform_up')

				if (distancia <= altura) {
					imagen[i].classList.add('aparece');
				}

				else {
					imagen[i].classList.remove('aparece');
				}
		}
})