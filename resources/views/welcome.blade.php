<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Ascendia</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/55be31527e.js" crossorigin="anonymous"></script>
</head>

<body class="bg-white">
    <nav class="navbar navbar-expand-lg" style="background-color: #316ad7;">
        <div class="container">
            <a class="navbar-brand text-uppercase text-white fst-italic fw-bolder text-decoration-underline"
                href="#">Ascendia</a>
    </nav>
    <main>
        <div class="container py-5">
            <div class="row d-flex justify-content-center">
                <a href="https://theascendia.phantasmify.com"
                    class="btn btn-outline-primary mb-4 rounded-pill col-11 col-md-6" target="_blank">
                    <i class="fa-solid fa-users me-1"></i>Go to Ascendia
                </a>
            </div>
            <div class="accordion" id="main-acc-panel">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="m1-h"><button
                            class="accordion-button collapsed button-accordion text-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#m1" aria-expanded="false" aria-controls="m1"><i
                                class="fa-regular fa-circle-question pe-3"></i> M1. Fiki and Project
                            Description </button></h2>
                    <div id="m1" class="accordion-collapse collapse" aria-labelledby="m1-h">
                        <div class="accordion-body p-0">
                            @include('milestones.m1')
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="m2-h"><button
                            class="accordion-button collapsed button-accordion text-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#m2" aria-expanded="false" aria-controls="m2"><i
                                class="fa-solid fa-check-double pe-3"></i>M2. Validation 1 </button></h2>
                    <div id="m2" class="accordion-collapse collapse" aria-labelledby="m2-h">
                        <div class="accordion-body p-0">
                            @include('milestones.m2')
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="m3-h"><button
                            class="accordion-button collapsed button-accordion text-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#m3" aria-expanded="false" aria-controls="m3">
                            <i class="fa-solid fa-diagram-project pe-3"></i>
                            M3. Wireframe and Landing Page</button></h2>
                    <div id="m3" class="accordion-collapse collapse" aria-labelledby="m3-h">
                        <div class="accordion-body p-0">
                            @include('milestones.m3')
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="m4-h"><button
                            class="accordion-button collapsed button-accordion text-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#m4" aria-expanded="false" aria-controls="m4">
                            <i class="fa-solid fa-fire pe-3"></i> M4. UX</button></h2>
                    <div id="m4" class="accordion-collapse collapse" aria-labelledby="m4-h">
                        <div class="accordion-body p-0">
                            @include('milestones.m4')
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="m5-h"><button
                            class="accordion-button collapsed button-accordion text-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#m5" aria-expanded="false" aria-controls="m5"><i
                                class="fa-solid fa-check-double pe-3"></i>
                            M5. Validation 2</button></h2>
                    <div id="m5" class="accordion-collapse collapse" aria-labelledby="m5-h">
                        <div class="accordion-body p-4">
                            @include('milestones.m5')
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="m6-h"><button
                            class="accordion-button collapsed button-accordion text-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#m6" aria-expanded="false" aria-controls="m6"><i
                                class="fa-solid fa-magnifying-glass-chart pe-3"></i>
                            M6. Market Research</button></h2>
                    <div id="m6" class="accordion-collapse collapse" aria-labelledby="m6-h">
                        <div class="accordion-body p-4">
                            @include('milestones.m6')
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="m7-h"><button
                            class="accordion-button collapsed button-accordion text-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#m7" aria-expanded="false" aria-controls="m7">
                            M7.</button></h2>
                    <div id="m7" class="accordion-collapse collapse" aria-labelledby="m7-h">
                        <div class="accordion-body"></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="m8-h"><button
                            class="accordion-button collapsed button-accordion text-light" type="button"
                            data-bs-toggle="collapse" data-bs-target="#m8" aria-expanded="false" aria-controls="m7">
                            M8.</button></h2>
                    <div id="m8" class="accordion-collapse collapse" aria-labelledby="m8-h">
                        <div class="accordion-body"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="py-3 mt-4 text-white" style="background-color:#00222c !important;">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">

        </ul>
        <p class="text-center">© 2024 Ascendia</p>
    </footer>
</body>
<style>
    body {
        background-color: #f0f0f0;
        font-family: Sans-serif, Verdana;
    }

    main {
        min-height: 85vh;
        overflow: auto;
    }

    .accordion-button:focus {
        outline: none !important;
        box-shadow: none !important;
    }

    .button-accordion {
        background-color: rgb(64, 112, 155) !important;
        color: white !important;
    }
</style>

</html>
