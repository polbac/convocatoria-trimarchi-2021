<?php
$countriesAndCities = file_get_contents('countries.min.json');
?>
<script defer src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
<script>
    const API_SAVE = "https://script.google.com/macros/s/AKfycbyYvti-jrOS8LfqZ3_92lAI4vmauvET1N5TQVMKDuv6reZPKs8ZGdQQW7EIn8OF1PkC/exec"
    const countries = JSON.parse('<?php echo $countriesAndCities; ?>');
</script>

<form name="register-form" class="">
    <div class="form-step">
        <div class="form-step-title">
            <p>
                Paso 1 Registrate en <a href="https://www.domestika.org/es" target="_blank">Doméstika</a>
            </p>
            <p>
                Completa tu perfil con foto
            </p>
        </div>
    </div>
    <div class="form-step">
        <div class="form-step-title">Paso 2 Completa el formulario</div>
        
        <div class="field-wrapper">
            <input name="Usuario" id="usuario" type="text" placeholder="Tu usuario / Perfil Domestika" required />
        </div>

        <div class="field-wrapper">
            <input name="Nombre" id="nombre" type="text" placeholder="Tu Nombre / Apellido" required />
        </div>

        <div class="field-wrapper">
            <input name="Edad" id="edad" type="text" placeholder="Edad" required />
        </div>

        <div class="field-wrapper">
            <select name="Pais" id="pais" type="text" required></select>
        </div>

        <div class="field-wrapper">
            <select name="Ciudad" id="ciudad" required></select>
        </div>

        
    </div>


    <div class="form-step">
        <div class="form-step-title">Paso 3 Elegi la/s categoría/s</div>
        
        <div class="field-wrapper">
            
            <div class="field-option">
                <input type="checkbox" name="category" id="Conferencia" value="Conferencia">
                <label for="conferencia">Conferencia</label>
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

    <div class="action-wrapper">
            <button type="submit">ENVIAR</buton>
        </div>

</form>

<script>
    const country = document.querySelector('#pais')
    const city = document.querySelector('#ciudad')
    const categories = document.querySelectorAll('input[name="category"]')

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
    
    form.addEventListener('submit', e => {
        e.preventDefault()
        const formData = new FormData(form)

        categories.forEach(category => {
            if (category.checked) {
                formData.append(category.getAttribute('value'), 'x')
            }
        })
        
        fetch(API_SAVE, { method: 'POST', body: formData })
            .then((res) => {
                console.log(res.status);
                form.reset()
                return res.text();
            })
            .then((res) => console.log(res))
            .catch(error => console.error('Error!', error.message))
    })

</script>
