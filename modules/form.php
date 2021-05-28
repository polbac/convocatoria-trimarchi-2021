<?php
$countriesAndCities = file_get_contents('countries.min.json');
?>
<script defer src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
<script>
    const API_SAVE = "https://script.google.com/macros/s/AKfycbyYvti-jrOS8LfqZ3_92lAI4vmauvET1N5TQVMKDuv6reZPKs8ZGdQQW7EIn8OF1PkC/exec"
    const countries = JSON.parse('<?php echo $countriesAndCities; ?>');
</script>

<form name="register-form" class="register-form">
    <h1 class="titulo">
        INSCRIPCIÓN
    </h2>

    <h2 class="subtitulo">
        PASO 1
    </h2>

    <h2 class="subtitulo red">
        Registrate en Domestika
    </h2>

    <p class="texto red">
        Podés hacerlo <span>acá</span>. Al crear tu perfil, te recomendamos hacerlo de manera completa (agregá una foto de perfil y contanos algo sobre vos). Eso nos ayudará a conocerte más y te dará mayores chances de ser elegido. <br/>
        Si tenés dudas, consulta las <span>FAQs</span> o encontranos en <span>convocatoriatrimarchi2021@gmail.com</span><br/>
        Si ya estás registrado en Domestika avanzá al Paso 2.
    </p>

    <div class="form-step">

        <h2 class="subtitulo">
            PASO 2
            </h2>
        <h2 class="subtitulo">
            Completá el formulario<br/>
            <detalle>(*) Obligatorios</detalle>
        </h2>
        
        <div class="formulario">

        <div class="field-wrapper">
            <div class="flex-column">
                <h2 class="subtitulo">
                    Usuario en Domestika*
                </h2>
                <input placeholder="@USERNAME" class="grow" name="Usuario" id="usuario" type="text"  required />
            </div>
            <p class="texto">
                Si ya estás registrado en Domestika pero no sabés cómo consultar<br/>
                tu nombre de usuario, chequeá las FAQs.
            </p>
        </div>

        <div class="field-wrapper flex-column">
            <h2 class="subtitulo">
                Nombre y Apellido*
            </h2>
            <input class="grow" name="Nombre" id="nombre" type="text" required />
        </div>

        <div class="field-wrapper flex-column">
            <h2 class="subtitulo">
                Edad*
            </h2>
            <input class="grow" name="Edad" id="edad" type="text" required />
        </div>

        <div class="field-wrapper flex-column">
            <h2 class="subtitulo">
                E-mail*
            </h2>
            <input class="grow" name="Email" id="email" type="email" required />
        </div>

        <div class="field-wrapper flex-column">
            <h2 class="subtitulo">
                País*
            </h2>
            <select class="grow" name="Pais" id="pais" type="text" required></select>
        </div>

        <div class="field-wrapper flex-column">
            <h2 class="subtitulo">
                Ciudad*
            </h2>
            <select class="grow" name="Ciudad" id="ciudad" required></select>
        </div>

        <div class="field-wrapper flex-column">
            <h2 class="subtitulo">
                Porfolio link*
            </h2>
            <input class="grow" name="Porfolio" id="porfolio" type="text" required />
        </div>

        <div class="field-wrapper flex-column">
            <h2 class="subtitulo" style="text-decoration: underline;">
                <label id="file-label">Adjuntar Portfolio</label>
            </h2>
            <input type="file" name="PorfolioArchivo" id="portfolio-archivo" accept=".mp3,.jpeg,.jpg,.png" />
            <div class="file-data">Max. <b>5MB</b></div>
        </div>

        <div class="field-wrapper">
            <h2 class="subtitulo" style="text-align: left; padding-top: 2.5vw">
                Contanos más<br/>
                de vos y tu proyecto
            </h2>
            <textarea  name="Descripcion" id="descripcion" placeholder="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit"></textarea>
        </div>
        
        </div>

    </div>

    <div class="form-step">
        <h2 class="subtitulo">
            PASO 3<br/>
            Confirmá la/s categorías<br/>
            en las que querés inscribirte
        </h2>
    </div>


    <div class="form-step">
        
        <div class="field-wrapper step-categories">
            
            <div class="field-option">
                <input type="checkbox" name="category" id="Conferencia" value="Conferencia">
                <label for="Conferencia">
                    <h2 class="subtitulo">Conferencia</h2>
                </label>
            </div>

            <div class="field-option">
                <input type="checkbox" name="category" id="Obra" value="Obra">
                <label for="Obra">
                    <h2 class="subtitulo">Obra</h2>
                </label>
            </div>

            <div class="field-option">
                <input type="checkbox" name="category" value="Workshop" id="Workshop">
                <label for="Workshop">
                    <h2 class="subtitulo">Workshop</h2>
                </label>
            </div>

            <div class="field-option">
                <input type="checkbox" name="category" id="Proyecto" value="Proyecto">
                <label for="Proyecto">
                    <h2 class="subtitulo">Proyecto</h2>
                </label>
            </div>

            <div class="field-option">
                <input type="checkbox" name="category" id="Música" value="Música">
                <label for="Música">
                    <h2 class="subtitulo">Música</h2>
                </label>
            </div>

            <div class="field-option">
                <input type="checkbox" name="category" id="Videoclip" value="Videoclip">
                <label for="Videoclip">
                    <h2 class="subtitulo">Videoclip</h2>
                </label>
            </div>

            <div class="field-option">
                <input type="checkbox" name="category" id="Portada" value="Portada">
                <label for="Portada">
                    <h2 class="subtitulo">Portada</h2>
                </label>
            </div>

            <div class="field-option">
                <input type="checkbox" name="category" id="Colectivo TRImarchi" value="Colectivo TRImarchi">
                <label for="Colectivo TRImarchi">
                    <h2 class="subtitulo">Colectivo TRImarchi</h2>
                </label>
            </div>
            
        </div>

    </div>

        <div class="form-step center">
            <h2 class="subtitulo">
                ¿Todo listo?
            </h2>
            <button type="submit" id="submit">ENVIAR</button><br />
            <detalle>Al hacer click en Enviar acepto todas las bases<br />
            y condiciones del concurso. Leer más<detalle>
        </div>

</form>

<script>
    const __DEV__ = document.location.hostname === 'localhost'
    const MAX_FILE_SIZE = 10240*1000
    const country = document.querySelector('#pais')
    const city = document.querySelector('#ciudad')
    const categories = document.querySelectorAll('input[name="category"]')
    const fileLabel = document.querySelector('#file-label')
    const fileInput = document.querySelector('#portfolio-archivo')
    const fileData = document.querySelector('.file-data')
    const submit = document.querySelector('#submit')
    let sending = false

    let serverFileName = ''
    let isLoading = false

    fileLabel.addEventListener("click", function() {
        fileInput.click()
    })

    fileInput.addEventListener("change", uploadFile)

    country.innerHTML = Object.keys(countries)
        .map(c => `<option value='${c}' ${c === 'Argentina' ? 'selected' : ''}>${c}</option>`)
    
    country.addEventListener('change', function() {
        showCities(this.value)
    })

    function showCities(country) {
        city.innerHTML = countries[country]
            .map(c => `<option value='${c}' ${c === 'Argentina' ? 'selected' : ''}>${c}</option>`)
    }

    showCities('Argentina')

    


    const form = document.forms['register-form']
    

    function uploadFile(e) {
        const formFile = new FormData(form)
        
        isLoading = true
        const file = fileInput.files[0]

        if (file.size > MAX_FILE_SIZE) {
            fileData.innerHTML = "El archivo es muy pesado..."
            setTimeout(() => {
                fileData.innerHTML = "MAX <b>5MB</b>"
            }, 3000)
            return
        }

        fileData.innerHTML = "Cargando..."
        formFile.append("file", file);

        fetch('/upload.php', {
            method: "POST", 
            body: formFile
        })
            .then(res => res.json())
            .then(res => {
                if (res.status === 'status_error') {
                    fileData.innerHTML = "<span style='color:red;'>UPS! ocurrió un error, intenta nuevamente</span>"
                    setTimeout(() => {
                        fileData.innerHTML = "MAX <b>5MB</b>"
                    }, 3000)
                    return;
                }
                fileData.innerHTML = file.name
                serverFileName = res.file
                
            })
            .catch(err => {
                fileData.innerHTML = "<span style='color:red;'>UPS! ocurrió un error, intenta nuevamente</span>"
                setTimeout(() => {
                    fileData.innerHTML = "MAX <b>5MB</b>"
                }, 3000)
            })
    }

    
    form.addEventListener('submit', e => {
        e.preventDefault()
        
        if (sending) {
            return
        }

        sending = true
        const formData = new FormData(form)
        formData.append('Archivo', `${document.location.origin}/uploads/${serverFileName}`)
        formData.append('PruebaDev', __DEV__)

        categories.forEach(category => {
            if (category.checked) {
                formData.append(category.getAttribute('value'), 'x')
            }
        })
        submit.innerHTML = '...'
        fetch(API_SAVE, { 
            method: 'POST', body: formData
        })
            .then((res) => {
                sending = false
                submit.innerHTML = 'ENVIAR'
                form.reset()
                return res.text();
            })
            .then((res) => {
                sending = false
            })
            .catch(error => {
                submit.innerHTML = 'ENVIAR'
                sending = false
            })
    })

</script>
