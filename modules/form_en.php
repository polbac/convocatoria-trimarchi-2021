<?php
$countriesAndCities = file_get_contents('countries.min.json');
?>
<script defer src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
<script>
    const API_SAVE = "https://script.google.com/macros/s/AKfycbyYvti-jrOS8LfqZ3_92lAI4vmauvET1N5TQVMKDuv6reZPKs8ZGdQQW7EIn8OF1PkC/exec"
    const countries = JSON.parse('<?php echo $countriesAndCities; ?>');
</script>

<form name="register-form" class="register-form">
    <h1 class="titulo"  min-weight="740" max-weight="840">
    REGISTRATION
    </h2>

    <h2 class="subtitulo">
        Step 1

    </h2>

    <h2 class="subtitulo">
        Sign up at Domestika
        <img src="iso-domestika.png"/>
    </h2>

    <p class="texto centrado">
    You can sign up <a target="_blank" href="https://www.domestika.org/">here</a>. When creating your profile, we recommend completing the all the steps of the process (add a profile photo and tell us something about yourself). This will help us get to know you better and will increase your chances of being selected.<br/>
If you have questions, check the <a href="#faq" class="menu-item smooth-link">FAQs</a> or find us at <a href="mailto:convocatoria2021@trimarchidg.net">convocatoria2021@trimarchidg.net</a><br/>
If you’re already registered at Domestika, go to Step 2.<br/>

    </p>

    <div class="form-step">

        <h2 class="subtitulo">
            Step 2
            </h2>
        <h2 class="subtitulo">
            Complete the form<br/>
            <detalle>(*) Required</detalle>
        </h2>
        
        <div class="formulario">

        <div class="field-wrapper">
            <div class="flex-column">
                <h2 class="subtitulo">
                    User at Domestika
                </h2>
                <input placeholder="@USERNAME" class="grow" name="Usuario" id="usuario" type="text"  />
            </div>
            <p class="texto">
                If you’re already registered at Domestika but don’t know how to check your user name, please read the <a href="#faq" class="menu-item smooth-link">FAQs</a>.
            </p>
        </div>

        <div class="field-wrapper flex-column">
            <h2 class="subtitulo">
            First and last name*:
            </h2>
            <input class="grow" name="Nombre" id="nombre" type="text" />
        </div>

        <div class="field-wrapper flex-column">
            <h2 class="subtitulo">
            Age*
            </h2>
            <input class="grow" name="Edad" id="edad" type="text" />
        </div>

        <div class="field-wrapper flex-column">
            <h2 class="subtitulo">
                E-mail*
            </h2>
            <input class="grow" name="Email" id="email" type="email" />
        </div>

        <div class="field-wrapper flex-column">
            <h2 class="subtitulo">
            Country*
            </h2>
            <select class="grow" name="Pais" id="pais" type="text" ></select>
        </div>

        <div class="field-wrapper flex-column">
            <h2 class="subtitulo">
            City*
            </h2>
            <select class="grow" name="Ciudad" id="ciudad" ></select>
        </div>

        <div class="field-wrapper flex-column">
            <h2 class="subtitulo">
            Portfolio: Link*
            </h2>
            <input class="grow" name="Porfolio" id="porfolio" type="text" placeholder="Behance, Domestika, Instagram, Youtube, Vimeo, web, etc"  />
        </div>

        <div class="field-wrapper flex-column">
            <h2 class="subtitulo" style="text-decoration: underline;">
                <label id="file-label"> Attach file</label>
            </h2>
            <input type="file" name="PorfolioArchivo" id="portfolio-archivo" accept=".mp3,.jpeg,.jpg,.png" />
            <div class="file-data">Max. <b>10MB</b></div>
        </div>

        <div class="field-wrapper">
            <h2 class="subtitulo" style="text-align: left; padding-top: 2.5vw">
            Tell us more about yourself<br/>and/or your project:

            </h2>
            <textarea  name="Descripcion" id="descripcion" placeholder=""></textarea>
        </div>
        
        </div>

    </div>

    <div class="form-step">
        <h2 class="subtitulo">
            STEP 3<br/>
            Confirm the category/ies<br/>you wish to register for

        </h2>
    </div>


    <div class="form-step">
        
        <div class="field-wrapper step-categories">
            
            <div class="field-option">
                <input type="checkbox" name="category" id="Conferencia" value="Conferencia">
                <label for="Conferencia">
                    <h2 class="subtitulo">Conference</h2>
                </label>
            </div>

            <div class="field-option">
                <input type="checkbox" name="category" id="Diseño Gráfico" value="Diseño Gráfico">
                <label for="Conferencia">
                    <h2 class="subtitulo">Graphic Design</h2>
                </label>
            </div>

            

            <div class="field-option">
                <input type="checkbox" name="category" id="Expo" value="Expo">
                <label for="Expo">
                    <h2 class="subtitulo">Expo</h2>
                </label>
            </div>

            <div class="field-option">
                <input type="checkbox" name="category" value="Workshop" id="Workshop">
                <label for="Workshop">
                    <h2 class="subtitulo">Workshop</h2>
                </label>
            </div>

            <div class="field-option">
                <input type="checkbox" name="category" id="Indumentaria" value="Indumentaria">
                <label for="Indumentaria">
                    <h2 class="subtitulo">Fashion design</h2>
                </label>
            </div>

            <div class="field-option">
                <input type="checkbox" name="category" id="Emprendimiento" value="Emprendimiento">
                <label for="Emprendimiento">
                    <h2 class="subtitulo">Entrepreneurs</h2>
                </label>
            </div>

            <div class="field-option">
                <input type="checkbox" name="category" id="Videoclip" value="Videoclip">
                <label for="Videoclip">
                    <h2 class="subtitulo">Music video</h2>
                </label>
            </div>

            <div class="field-option">
                <input type="checkbox" name="category" id="Música" value="Música">
                <label for="Música">
                    <h2 class="subtitulo">Music</h2>
                </label>
            </div>

            <div class="field-option">
                <input type="checkbox" name="category" id="Colectivo" value="Colectivo">
                <label for="Colectivo">
                    <h2 class="subtitulo">Colectivo TRImarchi
</h2>
                </label>
            </div>
            

            

           

            <!--div class="field-option">
                <input type="checkbox" name="category" id="Portada" value="Portada">
                <label for="Portada">
                    <h2 class="subtitulo">Portada</h2>
                </label>
            </div-->

           
        </div>

    </div>

        <div class="form-step center">
            <h2 class="subtitulo center">
                ¿All ready?
            </h2>
            <button type="submit" id="submit">SEND</button><br />
            <detalle>
            By clicking Send I accept all the bases<br/>
            and conditions of the contest. <a href='assets/bases_en.pdf' target='_blank'>Read more</a>
            <detalle>
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
            fileData.innerHTML = "The file is heavy (MAX 10MB)..."
            setTimeout(() => {
                fileData.innerHTML = "MAX <b>10MB</b>"
            }, 3000)
            return
        }

        fileData.innerHTML = "Sending..."
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
                        fileData.innerHTML = "MAX <b>10MB</b>"
                    }, 3000)
                    return;
                }
                fileData.innerHTML = file.name
                serverFileName = res.file
                
            })
            .catch(err => {
                fileData.innerHTML = "<span style='color:red;'>UPS! ocurrió un error, intenta nuevamente</span>"
                setTimeout(() => {
                    fileData.innerHTML = "MAX <b>10MB</b>"
                }, 3000)
            })
    }

    
    form.addEventListener('submit', e => {
        e.preventDefault()
        
        if (sending) {
            return
        }

        const usuarioField = $("#usuario")
        const nombreField = $("#nombre")
        const edadField = $("#edad")
        const emailField = $("#email")
        const paisField = $("#pais")
        const ciudadField = $("#ciudad")
        const porfolioField = $("#porfolio")
        const fields = [usuarioField,nombreField,edadField,emailField,paisField,ciudadField,porfolioField]

        let hasError = false
        let yGo = 0

        fields.forEach((el) => {
            el.removeClass('error')

            if (el.val() === "") {
                if (yGo === 0) {
                    yGo = el.offset().top - 200
                }
                el.addClass('error')
                hasError = true
            }
        })


        

        if (hasError) {
            const classElement = $(this).attr("href")
            window.scrollTo({ top: yGo, behavior: 'smooth' })
            $("aside .modal").html("There are errors! Check the form please")

            TweenLite.set("aside", {opacity: 0, display: 'flex'})
            TweenLite.to("aside", 0.3, { opacity: 1 })
            
            setTimeout(function() {
                TweenLite.to("aside", 0.3, { opacity: 0, onComplete: () => {
                    TweenLite.set("aside", {opacity: 0, display: 'none'})
                }})
            }, 2000)

            return true
        }

        

        sending = true

        const formData = new FormData(form)
        if (serverFileName !== '') {
            formData.append('Archivo', `${document.location.origin}/uploads/${serverFileName}`)
        }
        
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
                submit.innerHTML = 'SEND'
                form.reset()
                $("aside .modal").html("Congratulations! You are in!")
                TweenLite.set("aside", {opacity: 0, display: 'flex'})
                TweenLite.to("aside", 0.3, { opacity: 1 })
                
                setTimeout(function() {
                    TweenLite.to("aside", 0.3, { opacity: 0, onComplete: () => {
                        TweenLite.set("aside", {opacity: 0, display: 'none'})
                    }})
                }, 2000)

                return res.text();
            })
            .then((res) => {
                sending = false
            })
            .catch(error => {
                submit.innerHTML = 'SEND'
                sending = false

                $("aside .modal").html("UPS! Try again")
                TweenLite.set("aside", {opacity: 0, display: 'flex'})
                TweenLite.to("aside", 0.3, { opacity: 1 })
                
                setTimeout(function() {
                    TweenLite.to("aside", 0.3, { opacity: 0, onComplete: () => {
                        TweenLite.set("aside", {opacity: 0, display: 'none'})
                    }})
                }, 2000)
            })
    })

    $(".check-categoria").click(function() {
        const index = $('.check-categoria').index($(this))
        $("input[name='category']").eq(index).click()
        let text = ""
        if ($(this).hasClass("active")) {
            text = `Category ${$(this).text()} selected`
        } else {
            text = `Category ${$(this).text()} unselected`
        }
        $("aside .modal").html(text)
        TweenLite.set("aside", {opacity: 0, display: 'flex'})
        TweenLite.to("aside", 0.3, { opacity: 1 })
        
        setTimeout(function() {
            TweenLite.to("aside", 0.3, { opacity: 0, onComplete: () => {
                TweenLite.set("aside", {opacity: 0, display: 'none'})
            }})
        }, 1000)
    })

    $("input[name='category']").on('change', function() {
        const index = $("input[name='category']").index($(this))
        $(".check-categoria").eq(index).toggleClass('active')
    })

</script>
