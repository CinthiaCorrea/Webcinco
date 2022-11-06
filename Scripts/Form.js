

const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	Vorname: /^[a-zA-ZÀ-ÿ\s]{1,30}$/, // Nur Buchstaben
	Nachname: /^[a-zA-ZÀ-ÿ\s]{1,30}$/, // Nur Buchstaben
    Adresse: /^.{1,50}$/, //Nummer  und Buchstaben
	Ort: /^.{1,20}$/, 
    PLZ: /^.{4,10}$/,
    Email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/, // Buchstaben, Nummer, zeichen __ und @
    Passwort2: /^.{6,16}$/, // von 6 bis 10 Zeichen
    
	
}

const campos = {
	Vorname: false,
	Nachname: false,
    Adresse: false,
	Ort: false,
    PLZ: false,
    Email: false,
	Passwort2: false,
	
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "Vorname":
			validarCampo(expresiones.Vorname, e.target, 'Vorname');
		break;
		case "Nachname":
			validarCampo(expresiones.Nachname, e.target, 'Nachname');
		break;
        case "Adresse":
			validarCampo(expresiones.Adresse, e.target, 'Adresse');
		break;
		case "Ort":
			validarCampo(expresiones.Ort, e.target, 'Ort');
		break;
        case "PLZ":
			validarCampo(expresiones.PLZ, e.target, 'PLZ');
		break;
		case "Email":
			validarCampo(expresiones.Email, e.target, 'Email');
		break;
        case "Passwort2":
			validarCampo(expresiones.Passwort2, e.target, 'Passwort2');
			
		break;
		
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}



inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	//e.preventDefault();

	
	if(campos.Vorname && campos.Nachname && campos.Adresse  && campos.Ort && campos.PLZ && campos.Email && campos.Passwort2 ){
		//formulario.reset(); Loschen alle Daten was abgegeben wurde

		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});
