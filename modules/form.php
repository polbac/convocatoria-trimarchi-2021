<?php
$countriesAndCities = file_get_contents('countries.min.json');
?>
<script defer src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
<script>
    const API_SAVE = "https://script.google.com/macros/s/AKfycbyYvti-jrOS8LfqZ3_92lAI4vmauvET1N5TQVMKDuv6reZPKs8ZGdQQW7EIn8OF1PkC/exec"
    const countries = JSON.parse('<?php echo $countriesAndCities; ?>');
</script>

<form name="register-form" class="egister-form">
    <h1 class="titulo">INSCRIPCIÓN</h2>
    

    <p class="big-title-2">
        PASO 1
    </p>
    <p class="big-title-2 red">
        Registrate en Domestika
    </p>
    <p class="red center">
        Podés hacerlo acá. Al crear tu perfil, te recomendamos hacerlo de manera completa (agregá una foto de perfil y contanos algo sobre vos). Eso nos ayudará a conocerte más y te dará mayores chances de ser elegido. <br/>
        Si tenés dudas, consulta las FAQs o encontranos en convocatoriatrimarchi2021@gmail.com<br/>
        Si ya estás registrado en Domestika avanzá al Paso 2.
    </p>


    <div class="form-step">
        
        <p class="big-title-2">
            PASO 2
        </p>
        <p class="big-title-2">
            Completá el formulario
        </p>
        
        <div class="field-wrapper">
            <div class="flex-column">
                <label>Usuario en Domestika*</label>
                <input placeholder="@USERNAME" class="grow" name="Usuario" id="usuario" type="text"  required />
            </div>
            <p>
                Si ya estás registrado en Domestika pero no sabés cómo consultar<br/>
                tu nombre de usuario, chequeá las FAQs.
            </p>
        </div>

        <div class="field-wrapper flex-column">
            <label>Nombre y Apellido*</label>
            <input class="grow" name="Nombre" id="nombre" type="text" required />
        </div>

        <div class="field-wrapper flex-column">
            <label>Edad*</label>
            <input class="grow" name="Edad" id="edad" type="text" required />
        </div>

        <div class="field-wrapper flex-column">
            <label>E-mail*</label>
            <input class="grow" name="Email" id="email" type="email" required />
        </div>

        <div class="field-wrapper flex-column">
            <label>País*</label>
            <select class="grow" name="Pais" id="pais" type="text" required></select>
        </div>

        <div class="field-wrapper flex-column">
            <label>Ciudad*</label>
            <select class="grow" name="Ciudad" id="ciudad" required></select>
        </div>

        <div class="field-wrapper flex-column">
            <label>Porfolio link*</label>
            <input class="grow" name="Porfolio" id="porfolio" type="text" required />
        </div>

        <div class="field-wrapper flex-column">
            <label id="file-label">Adjuntar Portfolio</label>
            <input type="file" name="PorfolioArchivo" id="portfolio-archivo" accept=".mp3,.jpeg,.jpg,.png" />
            <div class="file-data">MAX <b>5MB</b></div>
        </div>

        <div class="field-wrapper">
            <label>Contanos más<br/>
            de vos y tu proyecto</label>
            <textarea  name="Descripcion" id="descripcion" placeholder="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit"></textarea>
        </div>

        
    </div>

    <div class="form-step">
    <p class="big-title-2">
            PASO 3  
        </p>
        <p class="big-title-2">
        Confirmá la/s categorías<br/>
en las que querés inscribirte
        </p>
    </div>


    <div class="form-step">
        
        
        <div class="field-wrapper step-categories">
            
            <div class="field-option">
                <input type="checkbox" name="category" id="Conferencia" value="Conferencia">
                <label for="Conferencia">Conferencia</label>
            </div>

            <div class="field-option">
                <input type="checkbox" name="category" id="Obra" value="Obra">
                <label for="Obra">Obra</label>
            </div>

            <div class="field-option">
                <input type="checkbox" name="category" value="Workshop" id="Workshop">
                <label for="Workshop">Workshop</label>
            </div>

            <div class="field-option">
                <input type="checkbox" name="category" id="Proyecto" value="Proyecto">
                <label for="Proyecto">Proyecto</label>
            </div>

            <div class="field-option">
                <input type="checkbox" name="category" id="Música" value="Música">
                <label for="Música">Música</label>
            </div>

            <div class="field-option">
                <input type="checkbox" name="category" id="Videoclip" value="Videoclip">
                <label for="Videoclip">Videoclip</label>
            </div>

            <div class="field-option">
                <input type="checkbox" name="category" id="Portada" value="Portada">
                <label for="Portada">Portada</label>
            </div>

            <div class="field-option">
                <input type="checkbox" name="category" id="Colectivo TRImarchi" value="Colectivo TRImarchi">
                <label for="Colectivo TRImarchi">Colectivo TRImarchi</label>
            </div>
            
        </div>

    </div>

        

        <div class="form-step center">
            <p class="big-title-2">
                ¿Todo listo?
            </p>
        
            <button type="submit" id="submit">ENVIAR</buton>
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
