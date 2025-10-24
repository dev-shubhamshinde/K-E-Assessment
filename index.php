<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Luxury Cruise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Offcanvas navbar large">
        <div class="container-fluid"> <a class="navbar-brand" href="index.php"> <img src="assets/images/KE-White.png" width="120px" alt=""></a> <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbar2Label"> <img src="assets/images/KE-White.png" width="120px" alt=""> </h5> <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3 gap-4">
                        <li class="nav-item"> <a class="nav-link active" href="index.php">Home</a> </li>
                        <li class="nav-item"> <a class="nav-link active" href="#aboutUs">About Us</a> </li>
                        <li class="nav-item"> <a class="nav-link active" href="#cabins">Cabins</a> </li>
                        <li class="nav-item"> <a class="nav-link active" href="#gallery">Gallery</a> </li>
                        <li class="nav-item"> <a class="nav-link active" href="#testimonials">Testimonials</a> </li>
                    </ul>
                    <form class="d-flex mt-3 mt-lg-0" role="search">
                        <a href="#enquiry-form"><button class="btn btn-warning" type="button">ENQUIRE NOW</button></a>
                    </form>
                </div> <text-blaze-app-reference style="display: contents !important;"></text-blaze-app-reference>
            </div>
        </div>
    </nav>

    <div class="container-fluid bg-dark bg-opacity-75 d-flex align-items-center justify-content-center"
        style="background-image: url('assets/images/banner.webp'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 80vh;">
        <div class="container py-5">
            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 rounded-3">
                        <h1 class="text-white">Luxury Cruising on <br>
                            the Nile</h1>
                        <hr class="border border-light border-1 opacity-75">

                        <h3 class="text-warning">
                            Exclusive Cruise Packages <br>
                            for Couples
                        </h3>
                        <div class="row">
                            <div class="col-sm-5 mb-3 mb-sm-0 ">
                                <div class="card text-bg-secondary bg-opacity-75">
                                    <div class="card-body">
                                        <span class="badge rounded-pill text-bg-primary">4 Nights</span>
                                        <h5 class="card-title fs-4">Aswan to Luxor</h5>
                                        <p class="card-text">₹ 14,995</p>
                                        <p class="card-text">per couple</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="card text-bg-secondary bg-opacity-75">
                                    <div class="card-body">
                                        <span class="badge rounded-pill text-bg-warning">7 Nights</span>
                                        <h5 class="card-title fs-4">Luxor to Aswan & Return</h5>
                                        <p class="card-text">₹ 24,995</p>
                                        <p class="card-text">per couple</p>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-warning mt-3 opacity-50 text-center" role="alert">
                                <b> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fork-knife" viewBox="0 0 16 16">
                                        <path d="M13 .5c0-.276-.226-.506-.498-.465-1.703.257-2.94 2.012-3 8.462a.5.5 0 0 0 .498.5c.56.01 1 .13 1 1.003v5.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5zM4.25 0a.25.25 0 0 1 .25.25v5.122a.128.128 0 0 0 .256.006l.233-5.14A.25.25 0 0 1 5.24 0h.522a.25.25 0 0 1 .25.238l.233 5.14a.128.128 0 0 0 .256-.006V.25A.25.25 0 0 1 6.75 0h.29a.5.5 0 0 1 .498.458l.423 5.07a1.69 1.69 0 0 1-1.059 1.711l-.053.022a.92.92 0 0 0-.58.884L6.47 15a.971.971 0 1 1-1.942 0l.202-6.855a.92.92 0 0 0-.58-.884l-.053-.022a1.69 1.69 0 0 1-1.059-1.712L3.462.458A.5.5 0 0 1 3.96 0z" />
                                    </svg>
                                    All Meals Included!</b>
                            </div>
                            <p class="text-white fw-bold">T&C Apply</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4 mb-md-0" id="enquiry-form">
                    <div class="h-100 p-4 text-bg-dark bg-opacity-75 rounded-3">
                        <form class="row g-3" method="POST" action="enquiry_form.php">
                            <div class="col-md-6">
                                <label for="firstName" class="form-label small">First Name</label>
                                <input type="text" class="form-control form-control-sm" id="firstName" name="firstName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="form-label small">Last Name</label>
                                <input type="text" class="form-control form-control-sm" id="lastName" name="lastName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="emailAddress" class="form-label small">Your Email</label>
                                <input type="email" class="form-control form-control-sm" id="emailAddress" name="emailAddress" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phoneNumber" class="form-label small">Phone Number</label>
                                <input type="text" class="form-control form-control-sm" id="phoneNumber" name="phoneNumber" required>
                            </div>
                            <div class="col-md-6">
                                <label for="dateOfBirth" class="form-label small">Date of Birth</label>
                                <input type="date" class="form-control form-control-sm" id="dateOfBirth" name="dateOfBirth" required>
                            </div>
                            <div class="col-md-6">
                                <label for="maritalStatus" class="form-label small">Marital Status</label>
                                <select class="form-select form-select-sm" aria-label="Default select example" id="maritalStatus" name="maritalStatus" required>
                                    <option selected>Select</option>
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="prefer not to say">Prefer not to say</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="passport" class="form-label small">Do you have a passport?</label>
                                <select class="form-select form-select-sm" aria-label="Default select example" id="passport" name="passport" required>
                                    <option selected>Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="packageOptions" class="form-label small">Package option</label>
                                <select class="form-select form-select-sm" aria-label="Default select example" id="packageOptions" name="packageOptions" required>
                                    <option selected>Select</option>
                                    <option value="4 Nights - Aswan to Luxor">4 Nights - Aswan to Luxor</option>
                                    <option value="7 Nights - Luxor to Aswan & Return">7 Nights - Luxor to Aswan & Return</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="packageOptions" class="form-label small">Message</label>
                                <div class="form-floating">
                                    <textarea class="form-control form-control-sm" placeholder="Leave a comment here" id="message" name="message"></textarea>
                                    <label for="message">Message.....</label>
                                </div>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="consentCheck" name="consentContact" value="yes">
                                <label class="form-check-label small" for="consentCheck">
                                    Allow Karma Experience/Karma Group related brands to communicate with me via SMS/e-mail/call/whatsapp during and after my submission on this promotional offer.
                                </label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="dndCheck" name="consentDND" value="yes">
                                <label class="form-check-label small" for="dndCheck">
                                    Should you be a registered DND subscriber, you agree that you have requested to be contacted about this contest/promotional offer.
                                </label>
                            </div>
                            <button type="submit" class="btn btn-warning">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="aboutUs" class="container-fluid d-flex align-items-center justify-content-center">
        <div class="container py-5">
            <div class="row align-items-md-stretch">
                <div class="col-md-6 border rounded-5" style="background-image: url('assets/images/banner.webp'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 80vh;">

                </div>

                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="h-100 p-4">
                        <h6 class="heading">About Us</h6>
                        <h3 class="fw-bold">Karma Karnak, Luxor</h3>
                        <p class="text-muted">
                            Set sail on the majestic Nile aboard Karma Group's inaugural river cruise. Choose between our 4-night or 7-night cruise packages, specially designed for couples. Relax by the pool or sun deck, savor fusion-inspired buffet meals (all meals included) in a stylish restaurant, and unwind with evening entertainment in the lounge and bar. Experience the romance of the Nile with your loved one.
                        </p>
                        <h5 class="fw-bold">Amenities:</h5>
                        <div class="bg-white p-4 rounded-3 shadow-sm">

                            <div class="row g-3">

                                <div class="col-md-4 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="d-inline-flex align-items-center justify-content-center bg-warning-subtle text-warning-emphasis rounded-circle p-2 me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cloud-sun" viewBox="0 0 16 16">
                                                <path d="M7 8a3.5 3.5 0 0 1 3.5 3.555.5.5 0 0 0 .624.492A1.503 1.503 0 0 1 13 13.5a1.5 1.5 0 0 1-1.5 1.5H3a2 2 0 1 1 .1-3.998.5.5 0 0 0 .51-.375A3.5 3.5 0 0 1 7 8m4.473 3a4.5 4.5 0 0 0-8.72-.99A3 3 0 0 0 3 16h8.5a2.5 2.5 0 0 0 0-5z" />
                                                <path d="M10.5 1.5a.5.5 0 0 0-1 0v1a.5.5 0 0 0 1 0zm3.743 1.964a.5.5 0 1 0-.707-.707l-.708.707a.5.5 0 0 0 .708.708zm-7.779-.707a.5.5 0 0 0-.707.707l.707.708a.5.5 0 1 0 .708-.708zm1.734 3.374a2 2 0 1 1 3.296 2.198q.3.423.516.898a3 3 0 1 0-4.84-3.225q.529.017 1.028.129m4.484 4.074c.6.215 1.125.59 1.522 1.072a.5.5 0 0 0 .039-.742l-.707-.707a.5.5 0 0 0-.854.377M14.5 6.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z" />
                                            </svg>
                                        </div>
                                        <span class="fw-semibold">Sun Deck</span>
                                    </div>
                                </div>

                                <div class="col-md-4 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="d-inline-flex align-items-center justify-content-center bg-warning-subtle text-warning-emphasis rounded-circle p-2 me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-walking" viewBox="0 0 16 16">
                                                <path d="M9.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0M6.44 3.752A.75.75 0 0 1 7 3.5h1.445c.742 0 1.32.643 1.243 1.38l-.43 4.083a1.8 1.8 0 0 1-.088.395l-.318.906.213.242a.8.8 0 0 1 .114.175l2 4.25a.75.75 0 1 1-1.357.638l-1.956-4.154-1.68-1.921A.75.75 0 0 1 6 8.96l.138-2.613-.435.489-.464 2.786a.75.75 0 1 1-1.48-.246l.5-3a.75.75 0 0 1 .18-.375l2-2.25Z" />
                                                <path d="M6.25 11.745v-1.418l1.204 1.375.261.524a.8.8 0 0 1-.12.231l-2.5 3.25a.75.75 0 1 1-1.19-.914zm4.22-4.215-.494-.494.205-1.843.006-.067 1.124 1.124h1.44a.75.75 0 0 1 0 1.5H11a.75.75 0 0 1-.531-.22Z" />
                                            </svg>
                                        </div>
                                        <span class="fw-semibold">Fitness Center</span>
                                    </div>
                                </div>

                                <div class="col-md-4 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="d-inline-flex align-items-center justify-content-center bg-warning-subtle text-warning-emphasis rounded-circle p-2 me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup-straw" viewBox="0 0 16 16">
                                                <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82q0 .069-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87s-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A1 1 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278M9.768 4.607A14 14 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.3 3.3 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a6 6 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69s2.081-.441 2.438-.69c.042-.029.09-.094.102-.215l.852-8.03a6 6 0 0 1-.435.127 9 9 0 0 1-.89.17zM4.467 4.884s.003.002.005.006zm7.066 0-.005.006zM11.354 5a3 3 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222" />
                                            </svg>
                                        </div>
                                        <span class="fw-semibold">Wine Bar</span>
                                    </div>
                                </div>

                                <div class="col-md-4 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="d-inline-flex align-items-center justify-content-center bg-warning-subtle text-warning-emphasis rounded-circle p-2 me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                                                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z" />
                                            </svg>
                                        </div>
                                        <span class="fw-semibold">Restaurant</span>
                                    </div>
                                </div>

                                <div class="col-md-4 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="d-inline-flex align-items-center justify-content-center bg-warning-subtle text-warning-emphasis rounded-circle p-2 me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-water" viewBox="0 0 16 16">
                                                <path d="M.036 3.314a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0L.314 3.964a.5.5 0 0 1-.278-.65m0 3a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0L.314 6.964a.5.5 0 0 1-.278-.65m0 3a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0L.314 9.964a.5.5 0 0 1-.278-.65m0 3a.5.5 0 0 1 .65-.278l1.757.703a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.014-.406a2.5 2.5 0 0 1 1.857 0l1.015.406a1.5 1.5 0 0 0 1.114 0l1.757-.703a.5.5 0 1 1 .372.928l-1.758.703a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.014-.406a1.5 1.5 0 0 0-1.114 0l-1.015.406a2.5 2.5 0 0 1-1.857 0l-1.757-.703a.5.5 0 0 1-.278-.65" />
                                            </svg>
                                        </div>
                                        <span class="fw-semibold">Swimming Pool</span>
                                    </div>
                                </div>

                                <div class="col-md-4 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="d-inline-flex align-items-center justify-content-center bg-warning-subtle text-warning-emphasis rounded-circle p-2 me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                                                <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm4 0v6h8V1zm8 8H4v6h8zM1 1v2h2V1zm2 3H1v2h2zM1 7v2h2V7zm2 3H1v2h2zm-2 3v2h2v-2zM15 1h-2v2h2zm-2 3v2h2V4zm2 3h-2v2h2zm-2 3v2h2v-2zm2 3h-2v2h2z" />
                                            </svg>
                                        </div>
                                        <span class="fw-semibold">Entertainment</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#enquiry-form"> <button class="btn btn-warning mt-3" type="button">ENQUIRE NOW</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="cabins" class="text-center mb-5">
        <h3 class="heading-big fw-bold">Luxury Cabins & Cruise Packages</h3>
        <h6 class="text-dark fw-bold ">Experience the Nile in comfort with our exclusive Cruise packages for couples</h6>
    </div>
    <div class="container">
        <div class="row align-items-md-stretch">
            <div class="col-md-6 rounded-3" style="background-image: url('assets/images/rooms-Karnak_Cabin-Twin.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 80vh;">
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-body-light rounded-3 border shadow">
                    <p>
                        Unwind in stylish river-view cabins, featuring plush bedding, modern amenities, and large windows offering breathtaking views of the Nile. Each cabin combines classic Egyptian style with contemporary comfort—perfect for watching the timeless beauty of the Nile drift by.
                    </p>
                    <div class="row">
                        <div class="col-12">
                            <h5 class="heading mb-3 fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.004-.001.274-.11a.75.75 0 0 1 .558 0l.274.11.004.001zm-1.374.527L8 5.962 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339Z" />
                                </svg>
                                Package Options
                            </h5>
                        </div>

                        <div class="col-12">
                            <div class="border rounded-4">
                                <div class="row package-container">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <div class="card package-card">
                                            <div class="card-body">
                                                <h5 class="card-title text-warning">4 Nights</h5>
                                                <p class="card-text text-white">Aswan to Luxor</p>
                                                <p><span class="fs-3 fw-bold text-white">₹14,995</span> per couple</p>
                                                <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                    </svg> All meal included</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card package-card package-card-active">
                                            <div class="card-body">
                                                <h5 class="card-title text-warning">7 Nights</h5>
                                                <p class="card-text text-white">Luxor to Aswan & Return</p>
                                                <p><span class="fs-3 fw-bold text-white">₹24,995</span> per couple</p>
                                                <p class="mt-0 "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                    </svg> All meal included</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-warning d-flex align-items-center mt-3 fw-bold" role="alert">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                            </svg> Stay period: November to December 2025
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!-- alert  -->
    <div class="container my-3 mt-5">

        <div class="alert alert-warning 
              border-0 
              border-start 
              border-warning 
              border-5 
              d-flex 
              align-items-start 
              shadow-sm 
              rounded-3"
            role="alert">

            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </svg>
            &nbsp;
            <div>
                <h6 class="mb-1 fw-bold">Important Information</h6>
                <p class="mb-0 fw-semibold">This offer is not valid for Karma Group members, past guests of Karma Group or its partner properties. It also does not apply to single travelers, groups, multiple families, or employees of Karma.</p>
            </div>
        </div>

    </div>

    <div class="container mt-5">
        <div class="text-center ">
            <h3 class="heading-big fw-bold">Cruise Itineraries</h3>
            <h6 class="text-dark fw-bold ">Explore the wonders of the Nile with our careful crafted journey</h6>
        </div>
        <div class="card shadow rounded-4 border-0 overflow-hidden">
            <div class="card-body p-4 p-lg-5">

                <div class="d-flex justify-content-between align-items-center flex-wrap g-2 mb-4">
                    <div>
                        <h4 class="mb-0 fw-bold fs-5 d-flex align-items-center heading-big">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-signpost-split-fill" viewBox="0 0 16 16">
                                <path d="M7 16h2V6h5a1 1 0 0 0 .8-.4l.975-1.3a.5.5 0 0 0 0-.6L14.8 2.4A1 1 0 0 0 14 2H9v-.586a1 1 0 0 0-2 0V7H2a1 1 0 0 0-.8.4L.225 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4h5z" />
                            </svg>
                            4 Nights - Aswan to Luxor
                        </h4>
                    </div>

                    <div>

                        <span class="badge rounded-pill text-bg-warning"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fork-knife" viewBox="0 0 16 16">
                                <path d="M13 .5c0-.276-.226-.506-.498-.465-1.703.257-2.94 2.012-3 8.462a.5.5 0 0 0 .498.5c.56.01 1 .13 1 1.003v5.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5zM4.25 0a.25.25 0 0 1 .25.25v5.122a.128.128 0 0 0 .256.006l.233-5.14A.25.25 0 0 1 5.24 0h.522a.25.25 0 0 1 .25.238l.233 5.14a.128.128 0 0 0 .256-.006V.25A.25.25 0 0 1 6.75 0h.29a.5.5 0 0 1 .498.458l.423 5.07a1.69 1.69 0 0 1-1.059 1.711l-.053.022a.92.92 0 0 0-.58.884L6.47 15a.971.971 0 1 1-1.942 0l.202-6.855a.92.92 0 0 0-.58-.884l-.053-.022a1.69 1.69 0 0 1-1.059-1.712L3.462.458A.5.5 0 0 1 3.96 0z" />
                            </svg> All Meals Included</span>
                    </div>
                </div>

                <div class="bg-body-tertiary rounded-3 p-2 mb-4 d-flex justify-content-center align-items-center text-secondary fw-medium">
                    <span class="me-4 d-inline-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                        </svg> Visit
                    </span>
                    <span class="d-inline-flex align-items-center">
                        <i class="bi bi-moon-fill me-2"></i> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
                            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                        </svg> Overnight
                    </span>
                </div>

                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 g-3">

                    <div class="col">
                        <div class="card h-100 rounded-3 bg-light border">
                            <div class="card-body p-3 p-lg-4">
                                <div class="day-circle mx-auto d-flex align-items-center justify-content-center mb-3">1</div>
                                <h6 class="fw-bold text-center mb-3 heading-big">Day 1</h6>
                                <ul class="list-unstyled text-start m-0 itinerary-list">
                                    <li class="mb-2 small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                        </svg>
                                        Aswan
                                    </li>
                                    <li class="small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
                                            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                                        </svg>
                                        Cruise
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 rounded-3 bg-light border">
                            <div class="card-body p-3 p-lg-4">
                                <div class="day-circle mx-auto d-flex align-items-center justify-content-center mb-3">2</div>
                                <h6 class="fw-bold text-center mb-3 heading-big">Day 2</h6>
                                <ul class="list-unstyled text-start m-0 itinerary-list">
                                    <li class="mb-2 small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                        </svg>
                                        Kom Ombu & Edfu
                                    </li>
                                    <li class="small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
                                            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                                        </svg>
                                        Edfu
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 rounded-3 bg-light border">
                            <div class="card-body p-3 p-lg-4">
                                <div class="day-circle mx-auto d-flex align-items-center justify-content-center mb-3">3</div>
                                <h6 class="fw-bold text-center mb-3 heading-big">Day 3</h6>
                                <ul class="list-unstyled text-start m-0 itinerary-list">
                                    <li class="mb-2 small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                        </svg>
                                        Esna
                                    </li>
                                    <li class="small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
                                            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                                        </svg>
                                        Luxor
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 rounded-3 bg-light border">
                            <div class="card-body p-3 p-lg-4">
                                <div class="day-circle mx-auto d-flex align-items-center justify-content-center mb-3">4</div>
                                <h6 class="fw-bold text-center mb-3 heading-big">Day 4</h6>
                                <ul class="list-unstyled text-start m-0 itinerary-list">
                                    <li class="mb-2 small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                        </svg>
                                        East Bank Luxor
                                    </li>
                                    <li class="small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
                                            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                                        </svg>
                                        Luxor
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 rounded-3 bg-warning-subtle border border-warning">
                            <div class="card-body p-3 p-lg-4">
                                <div class="day-circle mx-auto d-flex align-items-center justify-content-center mb-3">5</div>
                                <h6 class="fw-bold text-center mb-3 heading-big">Day 5</h6>
                                <ul class="list-unstyled text-start m-0 itinerary-list">
                                    <li class="mb-2 small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                        </svg>
                                        Checkout
                                    </li>
                                    <li class="text-center small">
                                        <span class="icon-placeholder"></span>
                                        West Bank Visit
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="card shadow rounded-4 border-0 overflow-hidden mt-5">
            <div class="card-body p-4 p-lg-5">

                <div class="d-flex justify-content-between align-items-center flex-wrap g-2 mb-4">
                    <div>
                        <h4 class="mb-0 fw-bold fs-5 d-flex align-items-center heading-big">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-signpost-split-fill" viewBox="0 0 16 16">
                                <path d="M7 16h2V6h5a1 1 0 0 0 .8-.4l.975-1.3a.5.5 0 0 0 0-.6L14.8 2.4A1 1 0 0 0 14 2H9v-.586a1 1 0 0 0-2 0V7H2a1 1 0 0 0-.8.4L.225 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4h5z" />
                            </svg>
                            7 Nights - Luxor to Aswan & Return
                        </h4>
                    </div>

                    <div>

                        <span class="badge rounded-pill text-bg-warning"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fork-knife" viewBox="0 0 16 16">
                                <path d="M13 .5c0-.276-.226-.506-.498-.465-1.703.257-2.94 2.012-3 8.462a.5.5 0 0 0 .498.5c.56.01 1 .13 1 1.003v5.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5zM4.25 0a.25.25 0 0 1 .25.25v5.122a.128.128 0 0 0 .256.006l.233-5.14A.25.25 0 0 1 5.24 0h.522a.25.25 0 0 1 .25.238l.233 5.14a.128.128 0 0 0 .256-.006V.25A.25.25 0 0 1 6.75 0h.29a.5.5 0 0 1 .498.458l.423 5.07a1.69 1.69 0 0 1-1.059 1.711l-.053.022a.92.92 0 0 0-.58.884L6.47 15a.971.971 0 1 1-1.942 0l.202-6.855a.92.92 0 0 0-.58-.884l-.053-.022a1.69 1.69 0 0 1-1.059-1.712L3.462.458A.5.5 0 0 1 3.96 0z" />
                            </svg> All Meals Included</span>
                    </div>
                </div>

                <div class="bg-body-tertiary rounded-3 p-2 mb-4 d-flex justify-content-center align-items-center text-secondary fw-medium">
                    <span class="me-4 d-inline-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                        </svg> Visit
                    </span>
                    <span class="d-inline-flex align-items-center">
                        <i class="bi bi-moon-fill me-2"></i> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
                            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                        </svg> Overnight
                    </span>
                </div>

                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-6 g-3">
                    <div class="col">
                        <div class="card h-100 rounded-3 bg-light border">
                            <div class="card-body p-3 p-lg-4">
                                <div class="day-circle mx-auto d-flex align-items-center justify-content-center mb-3">1</div>
                                <h6 class="fw-bold text-center mb-3 heading-big">Day 1</h6>
                                <ul class="list-unstyled text-start m-0 itinerary-list">
                                    <li class="mb-2 small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                        </svg>
                                        East Bank
                                    </li>
                                    <li class="small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
                                            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                                        </svg>
                                        Luxor
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 rounded-3 bg-light border">
                            <div class="card-body p-3 p-lg-4">
                                <div class="day-circle mx-auto d-flex align-items-center justify-content-center mb-3">2</div>
                                <h6 class="fw-bold text-center mb-3 heading-big">Day 2</h6>
                                <ul class="list-unstyled text-start m-0 itinerary-list">
                                    <li class="mb-2 small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                        </svg>
                                        West Bank
                                    </li>
                                    <li class="small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
                                            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                                        </svg>
                                        Edfu
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 rounded-3 bg-light border">
                            <div class="card-body p-3 p-lg-4">
                                <div class="day-circle mx-auto d-flex align-items-center justify-content-center mb-3">3</div>
                                <h6 class="fw-bold text-center mb-3 heading-big">Day 3</h6>
                                <ul class="list-unstyled text-start m-0 itinerary-list">
                                    <li class="mb-2 small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                        </svg>
                                        Edfu & Kom Ombu
                                    </li>
                                    <li class="small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
                                            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                                        </svg>
                                        Aswan
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 rounded-3 bg-light border">
                            <div class="card-body p-3 p-lg-4">
                                <div class="day-circle mx-auto d-flex align-items-center justify-content-center mb-3">4</div>
                                <h6 class="fw-bold text-center mb-3 heading-big">Day 4 & 5</h6>
                                <ul class="list-unstyled text-start m-0 itinerary-list">
                                    <li class="mb-2 small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                        </svg>
                                        Aswan
                                    </li>
                                    <li class="small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
                                            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                                        </svg>
                                        Aswan
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 rounded-3bg-light border">
                            <div class="card-body p-3 p-lg-4">
                                <div class="day-circle mx-auto d-flex align-items-center justify-content-center mb-3">6</div>
                                <h6 class="fw-bold text-center mb-3 heading-big">Day 6</h6>
                                <ul class="list-unstyled text-start m-0 itinerary-list">
                                    <li class="mb-2 small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                        </svg>
                                        Kom Ombu
                                    </li>
                                    <li class="small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
                                            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                                        </svg>
                                        Edfu
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 rounded-3 border">
                            <div class="card-body p-3 p-lg-4">
                                <div class="day-circle mx-auto d-flex align-items-center justify-content-center mb-3">7</div>
                                <h6 class="fw-bold text-center mb-3 heading-big">Day 7</h6>
                                <ul class="list-unstyled text-start m-0 itinerary-list">
                                    <li class="mb-2 small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                        </svg>
                                        Esna
                                    </li>
                                    <li class="small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
                                            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                                        </svg>
                                        Luxor
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 rounded-3 bg-warning-subtle border border-warning">
                            <div class="card-body p-3 p-lg-4">
                                <div class="day-circle mx-auto d-flex align-items-center justify-content-center mb-3">8</div>
                                <h6 class="fw-bold text-center mb-3 heading-big">Day 8</h6>
                                <ul class="list-unstyled text-start m-0 itinerary-list">
                                    <li class="mb-2 small">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                        </svg>
                                        Checkout
                                    </li>
                                    <li class="text-center small">
                                        <span class="icon-placeholder"></span>
                                        Departure
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Gallery  -->
    <h3 id="gallery" class="heading-big fw-bold mt-5 text-center mb-3">Our Gallery</h3>
    <div  class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/gallery-1743492180-Gallery-Karnak-05.webp" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/gallery-1743492180-Gallery-Karnak-06.webp" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/gallery-1743492180-Gallery-Karnak-07.webp" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/gallery-1743492180-Gallery-Karnak-08.webp" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/gallery-1743492180-Gallery-Karnak-03.webp" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/gallery-1743492180-Gallery-Karnak-04.webp" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
    </div>

    <!-- Nearby Attraction -->
    <h3 class="heading-big fw-bold mt-5 text-center mb-3">Nearby Attraction</h3>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/near bu attarction-Karnak-Temple.webp" class="card-img-top" alt="...">
                    <div class="card-footer text-center fw-bold">
                        <small class="text-body-secondary">Karnak Temple & Open-Air Museum</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/near bu attarction-Luxor-Temple.webp" class="card-img-top" alt="...">
                    <div class="card-footer text-center fw-bold">
                        <small class="text-body-secondary">Luxor Temple & Avenue of Sphinxes</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/near bu attarction-Mummification-Museums.webp" class="card-img-top" alt="...">
                    <div class="card-footer text-center fw-bold">
                        <small class="text-body-secondary">Luxor & Mummification Museums</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="testimonials" class="container px-4 py-5">
        <!-- Section Header -->
        <h3 class="heading-big fw-bold text-center">What Our Clients Say</h3>
        <h6 class="text-dark fw-bold text-center mb-3">Read the stories from our happy customers.</h6>

        <!-- Testimonial Grid -->
        <div class="row g-4 justify-content-center">

            <!-- Testimonial Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-lg p-4 rounded-3 testimonial-card">
                    <!-- Star Rating -->
                    <div class="mb-3">
                        <span class="text-warning fs-3">★★★★★</span>
                    </div>
                    <!-- Testimonial Text -->
                    <blockquote class="blockquote text-dark mb-4">
                        <p class="fst-italic fs-6">"We had wonderful trip at Karma Karnak. Tour guides are well informed. Guides explained all the historic places with the best information."</p>
                    </blockquote>
                    <!-- Author Info -->
                    <div class="d-flex align-items-center">
                        <img src="https://placehold.co/64x64/E0E7FF/4F46E5?text=TA"
                            alt="Profile picture of T Arvind"
                            class="rounded-circle border border-primary border-2"
                            style="width: 64px; height: 64px; object-fit: cover;">
                        <div class="ms-3">
                            <p class="fw-bold text-dark mb-0">T Arvind</p>
                            <p class="text-secondary mb-0">Marketing Head</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-lg p-4 rounded-3 testimonial-card">
                    <!-- Star Rating -->
                    <div class="mb-3">
                        <span class="text-warning fs-3">★★★★★</span>
                    </div>
                    <!-- Testimonial Text -->
                    <blockquote class="blockquote text-dark mb-4">
                        <p class="fst-italic fs-6">"Great vacation from Karma. Really enjoyed the voyage. The food was awesome. Staff were really cordial and helpful."</p>
                    </blockquote>
                    <!-- Author Info -->
                    <div class="d-flex align-items-center">
                        <img src="https://placehold.co/64x64/DBEAFE/1E40AF?text=JS"
                            alt="Profile picture of Jane Smith"
                            class="rounded-circle border border-primary border-2"
                            style="width: 64px; height: 64px; object-fit: cover;">
                        <div class="ms-3">
                            <p class="fw-bold text-dark mb-0">Jane Smith</p>
                            <p class="text-secondary mb-0">Project Manager</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial Card 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-lg p-4 rounded-3 testimonial-card">
                    <!-- Star Rating -->
                    <div class="mb-3">
                        <span class="text-warning fs-3">★★★★☆</span>
                    </div>
                    <!-- Testimonial Text -->
                    <blockquote class="blockquote text-dark mb-4">
                        <p class="fst-italic fs-6">"Amazing holiday with Karma. The accommodation was excellent and the service was fantastic. Every staff member was friendly and made us feel welcome. We had a truly memorable stay."</p>
                    </blockquote>
                    <!-- Author Info -->
                    <div class="d-flex align-items-center">
                        <img src="https://placehold.co/64x64/D1FAE5/065F46?text=MD"
                            alt="Profile picture of Michael Doe"
                            class="rounded-circle border border-success border-2"
                            style="width: 64px; height: 64px; object-fit: cover;">
                        <div class="ms-3">
                            <p class="fw-bold text-dark mb-0">Michael Doe</p>
                            <p class="text-secondary mb-0">CEO, TechCorp</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <footer class="p-3 mt-5 bg-body py-5" data-bs-theme="dark">
        <div class="row">
            <div class="col-md-5 offset-md-1 mb-3 py-5">
                <img src="assets/images/KE-White.png" width="250px" alt="">
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5 class="text-white">Quick Links</h5> <br>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-body-secondary">Home</a></li>
                    <li class="nav-item mb-2"><a href="#enquiry-form" class="nav-link p-0 text-body-secondary">Enquire Now</a></li>
                    <li class="nav-item mb-2"><a href="#aboutUs" class="nav-link p-0 text-body-secondary">About Us</a></li>
                    <li class="nav-item mb-2"><a href="#cabins" class="nav-link p-0 text-body-secondary">Cabins</a></li>
                    <li class="nav-item mb-2"><a href="#gallery" class="nav-link p-0 text-body-secondary">Gallery</a></li>
                    <li class="nav-item mb-2"><a href="#testimonials" class="nav-link p-0 text-body-secondary">Testimonials</a></li>
                </ul>
            </div>
            <div class="col-8 col-md-4 mb-3">
                <h5 class="text-white">Contact Us</h5> <br>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Central Reservation</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Bengaluru</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"></a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"></a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Regional Offices</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Philippines | United Kingdom | Germany | Bali | Goa</a></li>
                </ul>
            </div>

        </div>
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p class="text-light">© 2025 Karma Experience. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-body-emphasis" href="#" aria-label="Instagram"><svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="#" aria-label="Facebook"><svg class="bi" width="24" height="24" aria-hidden="true">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </div>
    </footer>
    <!-- </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>