<?php
$countriesAndCities = file_get_contents('countries.min.json');
?>
<script defer src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
<script>
    const API_SAVE = "https://script.google.com/macros/s/AKfycbyYvti-jrOS8LfqZ3_92lAI4vmauvET1N5TQVMKDuv6reZPKs8ZGdQQW7EIn8OF1PkC/exec"
    const countries = JSON.parse('<?php echo $countriesAndCities; ?>');
</script>

<form name="register-form">
    <div class="form-step">
        <div class="form-step-title">Paso 2 Completa el formulario</div>
        <div class="field-wrapper">
            <input name="user" id="user" type="text" placeholder="Tu usuario / Perfil Domestika" required />
        </div>

        <div class="field-wrapper">
            <input name="name" id="name" type="text" placeholder="Tu Nombre / Apellido" required />
        </div>

        <div class="field-wrapper">
            <select name="country" id="country" type="text" required></select>
        </div>

        <div class="field-wrapper">
            <select name="city" id="city" required></select>
        </div>

        <div class="action-wrapper">
            <button type="submit">ENVIAR</buton>
        </div>
    </div>

</form>

<script>
    const country = document.querySelector('#country')
    const city = document.querySelector('#city')
    
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
        fetch(API_SAVE, { method: 'POST', body: new FormData(form)})
            .then((res) => {
                console.log(res.status);
                return res.text();
            })
            .then((res) => console.log(res))
            .catch(error => console.error('Error!', error.message))
    })

</script>
